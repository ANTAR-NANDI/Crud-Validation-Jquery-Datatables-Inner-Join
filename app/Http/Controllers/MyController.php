<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use DB;

class MyController extends Controller
{
    public function about($n,$e)
    {
    	 return view('about',['myname'=>$n,'myemail'=>$e]);
    }
    
    public function add(){
    	return view('add');
    }

    public function show()
    {
       $data=Employee::all();
       return view('show',['employees'=>$data]);
    }

    public function store(Request $request)
    {
    	//echo $request->name;
    	//dd($request);
        $validatedata=$request->validate([//validate function for validation
       'name'=>'required|max:100|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
       'email'=>'required|email|unique:employees,email',//Unique in database
       'birth_date'=>'required|date|before_or_equal:2019-10-30',
       'salary'=>'required|integer|between:1,2000000',
       'password'=>[
            'required',
            'string',
            'min:8',             // must be at least 10 characters in length
            'regex:/[a-z]/',      // must contain at least one lowercase letter
            'regex:/[A-Z]/',      // must contain at least one uppercase letter
            'regex:/[0-9]/',      // must contain at least one digit
            'regex:/[@$!%*#?&]/', // must contain a special character
        ]
        ]);

    	$obj=new Employee();
    	$obj->name=$request->name;
    	$obj->email=$request->email;
    	$obj->birth_date=$request->birth_date;
    	$obj->salary=$request->salary;
      $obj->password=$request->password;
    	
    	if($obj->save())
    	{
    		return redirect()->to('/show');
    	}
    	
    }


    public function all()
    {
        $employees=DB::table('employees')
                 ->join('departments','departments.employees_id','employees.id')
                 ->select('departments.employees_id','departments.city','departments.country','employees.email','employees.salary','employees.birth_date')
                   ->get();
        // dd($employees);
        return view('employees',['employees'=>$employees]);
    }




    public function update($id)
    {
    	$employee=Employee::find($id);
       return view('edit',['employee'=>$employee]);
    }
    public function update_data(Request $req,$id)
    {
    	$obj=Employee::find($id);
    	$obj->name=$req->name;
    	
    	$obj->email=$req->email;
    	$obj->birth_date=$req->birth_date;
    	$obj->salary=$req->salary;
    	if($obj->save())
    	{
    		return redirect()->to('show');
    	}
    }
    public function delete($id)
    {
      $obj=Employee::find($id);
      if($obj->delete()){
      	return redirect()->to('show');
      	//echo "successful";
      }
    }
}
