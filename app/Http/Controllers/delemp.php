<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class delemp extends Controller
{
    public function DelEmp($id)
    {
        $deleteemp = employee::find($id);
        $fire = $deleteemp->delete();
        if($fire)
        {
            return redirect('/')->with('warning','Employee Deleted Successfully.');
        }
        else{
            echo "Not Deleted";
        }
    }
}
