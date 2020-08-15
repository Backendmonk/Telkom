<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            
        ]);
        $data = user::find($id);
        $data->name = $request->name;
        $data->alamat = $request->alamat;
        $data->email = $request->email;
        
        if($data->save()){
            return redirect('/home')->with('alert','Data Tersimpan');
        }else{
            return redirect('/home')->with('alert','Data gagal Tersimpan');
        }
       
    }
    
}
