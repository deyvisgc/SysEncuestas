<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;

class EncuestaController extends Controller
{
    public function index(){
        return view('Encuestas.Encuestas');
    }
}
