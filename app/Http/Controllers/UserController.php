<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function saveUsers(Request $req)
    {
        return $req->input();
//        return "Return data from UserController";
    }
}
