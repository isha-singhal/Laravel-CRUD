<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class addemp extends Controller
{
    public function AddEmp(Request $data)
    {
        $name = $data->input('empname');
        $empemail = $data->input('empemail');
        $empaddr = $data->input('empaddr');
        $empphone = $data->input('empphone');

        $employedb = new employee();
        $employedb->name = $name;
        $employedb->email = $empemail;
        $employedb->Address = $empaddr;
        $employedb->phone = $empphone;
        $fire = $employedb->save();
        if($fire)
        {
            return redirect('/')->with('warning','Employee Added Successfully.');
        }
        else
        {
            echo "Not Added some error!";
        }
    }
}
