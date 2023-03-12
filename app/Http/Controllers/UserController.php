<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function saveUsers(Request $req)
    {
//        return $req->input();
//        return "Return data from UserController";
//        return DB::select("Select * from users");
        return Coupon::all();
    }
}
