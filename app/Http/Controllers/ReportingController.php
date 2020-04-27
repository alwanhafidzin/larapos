<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ReportingController extends Controller
{
    public function index(){
        $data['title']  = "Reporting - laracms";
        $data['produk'] = DB::select("SELECT * FROM t_produk");
        return view('reporting', $data);
    }

    public function previewPdf(){
        $data['title']  = "Reporting - laracms";
        $data['produk'] = DB::select("SELECT * FROM t_produk");
        $pdf            = PDF::loadview('reporting-wrap',$data);
        return $pdf->stream();
    }

    public function printPdf(){
        $data['title']  = "Reporting - laracms";
        $data['produk'] = DB::select("SELECT * FROM t_produk");
        $pdf            = PDF::loadview('reporting-wrap',$data);
        return $pdf->download('reporting-file.pdf');
    }
}
