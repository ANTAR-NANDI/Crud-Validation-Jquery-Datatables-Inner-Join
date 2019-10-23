<?php

namespace App\Imports;

use App\Employee;
use Maatwebsite\Excel\Concerns\ToModel;

class EmployeesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Employee([
            'name'=>$row[0],
            'email'=>$row[1],
            'birth_date'=> "2012-10-10",
            'salary'=>$row[3],
            'password'=>$row[4]

            
            //
        ]);
    }
}
