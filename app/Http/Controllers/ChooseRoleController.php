<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ChooseRoleController extends Controller
{
    //

    public function index()
    {
        if (Auth::user()->role =='admin') {
            return redirect('/admin');
        }

        elseif (Auth::user()->role =='buyer') {
            return redirect('/buyer');
        }

        elseif (Auth::user()->role =='partner') {
            return redirect('/partner');
        }


        else{
            abort(403);
        }
    }
}
