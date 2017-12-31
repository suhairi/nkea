<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;

class PerbicaraanController extends Controller
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
        return view('members/bicaraform');
    }

    public function insertform()
    {
        return view('bicaraform');
    }

    public function insertBicara(Request $request)
    {
        $blok = $request->input('blok');
        $fasa = $request->input('fasa');
        $negeri = $request->input('negeri');
        $daerah = $request->input('daerah');
        $mukim = $request->input('mukim');
        $pakej = $request->input('pakej');
        $lot = $request->input('no_lot');
        $hak_milik = $request->input('hak_milik');
        $jajaran = $request->input('jajaran');
        $t_bicara = $request->input('t_bicara');

        $status_bicara = $request->input('status_bicara');
        $status_tanah = $request->input('status');
        $bil_pemilik = $request->input('pemilik');
        $luas_ambil = $request->input('luas_ambil');
        $nilai_tanah = $request->input('nilai_tanah');
        $pampasan = $request->input('pampasan');
        $lain_pampasan = $request->input('l_pampasan');
        $jumlah = $request->input('jum_pampasan');
        $catatan = $request->input('catatan');

        $request->session()->put('blok', 'fasa', 'negeri', 'daerah', 'mukim', 'pakej', 'no_lot', 'hak_milik', 'no_warta', 'jilid');

        DB::insert('insert into perbicaraan 
                (no_blok, fasa, negeri, daerah, mukim, pakej, no_lot, no_hakmilik, jajaran, t_bicara, status_bicara, status_tanah, bil_pemilik, luas_pengambilan, nilai_tanah, pampasan, lain_pampasan, jum_pampasan, catatan)
                values
                 (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
                 [$blok, $fasa, $negeri, $daerah, $mukim, $pakej, $lot, $hak_milik, $jajaran, $t_bicara, $status_bicara, $status_tanah, $bil_pemilik, $luas_ambil, $nilai_tanah, $pampasan, $lain_pampasan, $jumlah, $catatan]);

        echo "Record inserted successfully.<br>";
        return redirect('/bicaramenu');
    }

    public function viewbicara()
    {
        $users = DB::select('select id, no_blok, pakej, no_lot, no_hakmilik from perbicaraan');
        return view('members/bicaramenu',['users'=>$users]);
    }
}
