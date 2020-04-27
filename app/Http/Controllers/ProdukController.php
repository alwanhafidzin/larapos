<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller {

	public function index(){
		$data['title'] = "Produk - laracms";
		$data['produk'] = DB::select("SELECT * FROM t_produk");
		return view ('produk_index', $data);
	}

	public function uploadForm(){
		$data['title'] = "Upload Form - laracms";
		$data['produk'] = DB::select("SELECT * FROM t_produk");
		return view ('upload_form', $data);
	}

	public function uploadAction(Request $request) {
		$method = $request->method();
		if ($method == "POST") {
			$directory = 'assets/produk';
			$file = $request->file('file');
			$file->move($directory, $file->getClientOriginalName());

			DB::insert("INSERT INTO t_produk (foto,deskripsi,stok,harga) VALUES (?, ?, ?, ?)", 
			[
				$directory."/".$file->getClientOriginalName(),
				$request->input('deskripsi'),
				$request->input('stok'),
				$request->input('harga')
			]);
			return redirect('/upload/form');
		}else {
			return redirect('/upload/form');
		}
	}

	public function produkEdit($id) {
        $data['produk'] = DB::selectOne("SELECT * FROM t_produk WHERE id=?",
        [$id]);
        $data['title'] = "Edit Produk - laracms";
    	return view('produk_edit', $data);
	}

	public function produkEditSave(Request $request){
		$method = $request->method();
		if($method == "POST"){
			$directory = 'assets/produk';
			$file = $request->file('file');
					$file->move($directory, $file->getClientOriginalName());

					DB::update("UPDATE t_produk SET foto=?, deskripsi=?, stok=?, harga=? WHERE id=?",[
						$directory."/".$file->getClientOriginalName(),
						$request->input('deskripsi'),
						$request->input('stok'),
						$request->input('harga'),
						$request->input('id')
					]);
			return redirect('/produk');

		}else{
			return redirect('/produk');
		}
	}
	
	public function produkDetail($id) {
        $data['produk'] = DB::selectOne("SELECT * FROM t_produk WHERE id=?",
        [$id]);
        $data['title'] = "Detail Produk - laracms";
    	return view('produk_detail', $data);
    }

	public function produkDelete($id){
		DB::delete("DELETE FROM t_produk WHERE id=?", [$id]);
		return redirect('/produk');
	}
    
}