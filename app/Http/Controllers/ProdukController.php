<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProdukController extends Controller
{
    public function read() {
        $no = 1;
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('admin.produk', compact('produk', 'kategori', 'no'));
    }

    public function delete($id){
        DB::table('produks')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function create(Request $request)
    {

        $lampiran     = $request->file('foto');
        $lampiranName = time() . "_" . $lampiran->getClientOriginalName();
        $lampiranPath   = "foto";
        $lampiran->move($lampiranPath, $lampiranName);

        ($request->all());
        $this->saveProduk($request->all(), $lampiranName);

        return Redirect::to("admin/produk")->withSuccess('Berhasil! Data Produk Berhasil Diinput.');
    }

    protected function saveProduk(array $data, $lampiran = null)
    {
        return Produk::create([
            'nama'         => $data['nama'],
            'harga'     => $data['harga'],
            'kategori'     => $data['kategori'],
            'deskripsi'   => $data['deskripsi'],
            'foto'      => $lampiran,
        ]);
    }

    public function home() {
        $produk = Produk::all()->take(3);
        return view('client.home', compact('produk'));
    }

    public function shop() {
        $produk = Produk::all();
        return view('client.shop', compact('produk'));
    }
}
