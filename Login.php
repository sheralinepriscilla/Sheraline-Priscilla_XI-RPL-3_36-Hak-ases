<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelKontak;
use Session;

class Login extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function cek(Request $req)
    {
        $this->validate($req,[
            'user'=>'required',
            'psw'=>'required'
        ]);
        $proses=ModelKontak::where('user',$req->user)->where('password',$req->psw)->first();
        if($proses){
            Session::put('id',$proses->id);
            Session::put('user',$proses->user);
            Session::put('password',$proses->psw);
            Session::put('nama',$proses->nama);
            Session::put('login_status',true);
            return redirect('/kontak');
        } else {
            Session::flash('alert_pesan','Username dan password tidak cocok');
            return redirect('login');
        }
    }
    public function logout()
    {
        Session::flush();
        return redirect('login');
    }

}

