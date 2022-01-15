<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class KategoriController extends Controller
{
    public function read() {
        $no = 1;
        $kategori = Kategori::all();
        return view('admin.kategori', compact('kategori', 'no'));
    }

    public function delete($id){
        DB::table('kategoris')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function create(Request $request){
        $kategori = new Kategori();
        $kategori->nama = ucwords(strtolower($request->nama));
        $kategori->save();

        return Redirect::to("admin/kategori")->withSuccess('Berhasil! Data Kategori Berhasil Diinput.');
    }
}
