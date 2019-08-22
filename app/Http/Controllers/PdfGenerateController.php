<?php

namespace SysEncuesta\Http\Controllers;

use Illuminate\Http\Request;
use SysEncuesta\Http\Requests;
use DB;
use PDF;

class PdfGenerateController extends Controller
{
    public function pdfview(Request $request)
    {
        $users = DB::table("usuario")->get();
        view()->share('users',$users);

        if($request->has('download')) {
            // pass view file
            $pdf = PDF::loadView('pdfview');
            // download pdf
            return $pdf->download('userlist.pdf');
        }
        return view('pdfview');
    }
}
