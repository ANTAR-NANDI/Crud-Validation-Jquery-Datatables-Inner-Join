<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageModel;
use Image;

use App\Imports\EmployeesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Employee;
use PDF;
class UploadController extends Controller
{
    //All Image Show
    public function viewpage()
    {
    	 $images=ImageModel::all();
       return view('upload',['images'=>$images]);
    	
    }
   //Pdf Making 
      public function downloadPDF($id){
      $user = Employee::find($id);

      $pdf = PDF::loadView('pdf_view', ['e'=>$user]);
      return $pdf->download('invoice.pdf');
        // return view('pdf_view',['e'=>$user]);


    }
    //Excel File 
    public function import()
    {
        return view('excel');
    }

    public function importFile()
    {
        Excel::import(new EmployeesImport,request()->file('file'));
           
        return redirect()->to('show');
    }
    
    //Multiple Image Upload

    public function store(Request $request)
    {


  $filenames= $request->file('filenames');
  
    	foreach ($filenames as $filename) {
        $originalImage = $filename;

        $thumbnailImage = Image::make($originalImage);
        $thumbnailPath = public_path().'/uploads//thumbnail/';
        $originalPath = public_path().'/uploads/images/';
        $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());
        $thumbnailImage->resize(150,150);
        $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName()); 

        $imagemodel= new ImageModel();
        $imagemodel->filename=time().$originalImage->getClientOriginalName();
        $imagemodel->save();

    	}
       
       
        return back()->with('success', 'Your images has been successfully Upload');

    }
}
