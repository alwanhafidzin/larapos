<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingController extends Controller
{
    public function listProduk(Request $request){
        $data['title']      = "laracms | produk";
        $data['cart']       = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM nota WHERE id_customer=? AND status_transaksi='pending'", [$request->session()->get('s_id')]);
        $data['produk']     = DB::select("SELECT p.id, p.nama, p.thumbnail, p.harga, p.stok, k.nama AS kategori
                                FROM produk AS p
                                INNER JOIN kategori AS k ON p.kategori_id=k.id", []);
        return view('list-produk', $data);
    }

    public function cart(Request $request){
        $nota = DB::selectOne("SELECT * FROM nota WHERE status_transaksi='pending' AND jenis_faktur='penjualan' AND id_customer=?", [
            $request->session()->get('s_id')
        ]);
        if ($nota != null) {
            // echo "Nota Exist .. ";
            // echo "Produk ID: " . $request->get('produkId') . " .. ";
            // echo ($request->get('produkId') == null) . " .. ";
            if ($request->get('produkId') == null) {
                // echo "akses menu .. ";
                $cartExist['cart']      = DB::select("SELECT * FROM keranjang WHERE nota_id=?", [$nota->id]);
                $nota                   = (object)array_merge((array)$nota, (array)$cartExist);
            } else {
                // echo "akses id .. ";
                $chart = DB::selectOne("SELECT COUNT(*) AS jumlah_produk_dibeli FROM keranjang WHERE nota_id=? AND produk_id=?", [
                    $nota->id,
                    $request->get('produkId')
                ]);
                if ($chart->jumlah_produk_dibeli == 0) {
                    // echo "produk belum ada di keranjang .. ";
                    $produk = DB::selectOne("SELECT id, nama, harga FROM produk WHERE id=?", [
                        $request->get('produkId')
                    ]);
                    $insertkeranjang = DB::insert("INSERT INTO keranjang(nama_produk, harga_satuan, kuantitas, subtotal, nota_id, produk_id)
                    VALUES (?, ?, ?, ?, ?, ?)", [
                        $produk->nama, $produk->harga, 1, $produk->harga * 1,
                        $nota->id, $request->get('produkId')
                    ]);
                    // echo $insertkeranjang;
                    $cartExist['cart']  = DB::select("SELECT * FROM keranjang WHERE nota_id=?", [$nota->id]);
                    $nota               = (object)array_merge((array)$nota, (array)$cartExist);
                } else {
                    // echo "produk sudah ada di keranjang .. ";
                    $cartExist['cart']  = DB::select("SELECT * FROM keranjang WHERE nota_id=?", [$nota->id]);
                    $nota               = (object)array_merge((array)$nota, (array)$cartExist);
                }
            }
        } else {
            // echo "Nota Not Exist .. ";
            DB::insert("INSERT INTO nota (id_customer, nama_customer, total, ppn, tagihan, jenis_faktur, status_transaksi)
            VALUES (?, ?, 0.00, 10.00, 0.00, 'penjualan', 'pending')", [
                $request->session()->get('s_id'),
                $request->session()->get('s_nama')
            ]);
            return redirect('/shopping/cart?produkId=' . $request->get('produkId'));
        }
        $data['title']  = "laracms | cart";
        $data['cart']   = DB::selectOne("SELECT COUNT(*) AS jumlah_keranjang FROM nota WHERE id_customer=? AND status_transaksi='pending'", [
            $request->session()->get('s_id')
        ]);
        $data['nota']   = $nota;
        $data['tanggal']= date('d-m-Y H:i:s');
        return view('nota', $data);
    }

    public function checkout($notaId){
        DB::update("UPDATE nota SET status_transaksi='sukses' WHERE id=?", [$notaId]);
        return redirect('/shopping');
    }
}
