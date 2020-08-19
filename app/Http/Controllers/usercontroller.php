<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Illuminate\Support\Facades\Hash;

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
    public function add(){
       
        return view('admin.add');
        
    }
 
   protected function store(request $request)
   {
       

    

        $cek = user::where('email','=',$request->email)->count('email');
            
        if($cek > 0 ){
            return redirect()->back()->with('error','Email Sudah Digunakan');;
        }else{

            user::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'level'=>$request->level,
                'alamat'=>$request->alamat]);

                return redirect('/data-teknisi');
        }
       

     

    
   }

    
}