<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class usercontroller extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function teknisi(){

        $tek = user::where('level','=','user')->get();
        return view ('admin.datateknisi',compact('tek'));
      
    }
}