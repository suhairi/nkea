<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class TambahBlokController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members/addblok');
    }

    public function insertform()
    {
        return view('addblok');
    }

    public function insert(Request $request)
    {
        $blok = $request->input('nama_blok');
        $total = $request->input('total');
        $kos = $request->input('anggaran_kos');
        $lot_batal = $request->input('lot_batal');
        $lokaliti = $request->input('lokaliti');
        $bayar = $request->input('lot_bayar');
        $fasa = $request->input('fasa');
        $baki_lot = $request->input('baki_lot');


        DB::insert('insert into blok_tersier (
            no_blok, jum_lot_total, anggaran_kos, bil_lot_batal, lokaliti, bil_lot_bayar, phase, baki_lot) values
            (?, ?, ?, ?, ?, ?, ?, ?)',
            [$blok, $total, $kos, $lot_batal, $lokaliti, $bayar, $fasa, $baki_lot]);

        echo "Record inserted successfully.<br>";
        return redirect('/addblok');
    }
}
