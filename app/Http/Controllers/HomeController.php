<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use SysEncuesta\User;

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
        $user1=DB::select("SELECT COUNT(*) as user FROM usuario WHERE usuario.estado=0");
        $user4 =User::where('estado','=', 0)->get();
        $user5 =User::where('estado','=', 2)->get();
        $user2=DB::select("SELECT COUNT(*) as user1 FROM usuario WHERE usuario.estado=2");
        $user6=DB::select("SELECT * FROM usuario ");

        $alluser=DB::select("SELECT COUNT(*) as alluser FROM usuario ");
        return view('Principal.dasbord',['user'=>$user1,'user1'=>$user2,
            'alluser'=>$alluser,"user4"=>$user4,'user5'=>$user5,'user6'=>$user6]);
    }
    public function mensaje(){
        return view('Admin.mensaje');
    }
}
