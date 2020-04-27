<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facedes\URL;

class InvoiceController extends Controller
{
    public function index(){
        $data['title']  = "Invoice | laracms";
        $data['produk'] = DB::select("SELECT * FROM t_produk");
        return view('invoice', $data);
    }

    public function previewPdf(){
        $data['title']      = "Invoice | larcms";
        $data['baseurl']    = URL::to("/");
        $data['produk']     = DB::select("SELECT * FROM t_produk");
        $pdf                = PDF::loadview('invoice_print', $data);
        return $pdf->stream();
    }

    public function printPdf(){
        $data['title']      = "Invoice | larcms";
        $data['produk']     = DB::select("SELECT * FROM t_produk");
        $pdf                = PDF::loadview('invoice_print', $data);
        return $pdf->download('reporting-file.pdf');
    }
}
