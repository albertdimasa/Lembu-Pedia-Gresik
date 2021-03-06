<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    public function home()
    {
        $data = DB::table('produks')->limit(3)->get();
        return view('client.home', compact('data'));
    }

    public function shop()
    {
        $data = DB::table('produks')->get();
        return view('client.shop', compact('data'));
    }
}
