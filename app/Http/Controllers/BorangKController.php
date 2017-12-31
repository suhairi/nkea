<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class BorangKController extends Controller
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
        return view('members/borangk');
    }

    public function insertform()
    {
        return view('borangk');
    }

    public function insertBorangk(Request $request)
    {
        $blok = $request->input('blok');
        $fasa = $request->input('fasa');
        $negeri = $request->input('negeri');
        $daerah = $request->input('daerah');
        $mukim = $request->input('mukim');
        $pakej = $request->input('pakej');
        $no_lot = $request->input('no_lot');
        $hak_milik = $request->input('hak_milik');
        $tarikh_k = $request->input('tarikh_k');
        $rujukan = $request->input('rujukan_k');
        $fail = $request->input('rujukan_fail');


        DB::insert('insert into borangk (blok, fasa, negeri, daerah, mukim, pakej, no_lot, hak_milik, tarikh_k, rujukan_k, fail) values (?,?,?,?,?,?,?,?,?,?,?)',[$blok, $fasa, $negeri, $daerah, $mukim, $pakej, $no_lot, $hak_milik, $tarikh_k, $rujukan, $fail]);

        echo "Record inserted successfully.<br>";
        return redirect('/home');
    }

    public function view()
    {
        $users = DB::select('select id, blok, no_lot, hak_milik, rujukan_k from borangk');
        return view('members/borangkmenu',['users'=>$users]);
    }
}
