<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class updemp extends Controller
{
    public function UpdateEmp(Request $data)
    {
        $id = $data->input('id');
        $name = $data->input('updempname');
        $empemail = $data->input('updempemail');
        $empaddr = $data->input('updempaddr');
        $empphone = $data->input('updempphone');

        $fire = employee::where('id',$id)
        ->update(
            [
                'name'=>$name,
                'email'=>$empemail,
                'Address'=>$empaddr,
                'phone'=>$empphone
            ]
        );
        if($fire)
        {
            return redirect('/')->with('warning','Employee Updated Successfully.');
        }
        else
        {
            echo "Not Updated some error!";
        }
    }
}
