<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Promosi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PromosiController extends Controller
{
    public function read()
    {
        $no = 1;
        $kategori   = Kategori::all();
        $promosi    = Promosi::all();
        return view('admin.promosi', compact('promosi', 'kategori', 'no'));
    }

    public function delete($id)
    {
        DB::table('promosis')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function create(Request $request)
    {

        $lampiran       = $request->file('foto');
        $lampiranName   = time() . "_" . $lampiran->getClientOriginalName();
        $lampiranPath   = "foto";
        $lampiran->move($lampiranPath, $lampiranName);

        ($request->all());
        $this->saveProduk($request->all(), $lampiranName);

        return Redirect::to("admin/promosi")->withSuccess('Berhasil! Data Promosi Berhasil Diinput.');
    }

    protected function saveProduk(array $data, $lampiran = null)
    {
        return Promosi::create([
            'nama'              => $data['nama'],
            'hargasebelum'      => $data['hargasebelum'],
            'hargasesudah'      => $data['hargasesudah'],
            'kategori'          => $data['kategori'],
            'diskon'            => $data['diskon'],
            'deskripsi'         => $data['deskripsi'],
            'foto'              => $lampiran,
        ]);
    }
}
