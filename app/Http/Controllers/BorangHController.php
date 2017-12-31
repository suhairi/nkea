<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class BorangHController extends Controller
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
        return view('members/borangh');
    }

    public function insertform()
    {
        return view ('borangh');
    }

    public function insertBorangh(Request $request)
    {
        $blok = $request->input('blok');
        $fasa = $request->input('fasa');
        $negeri = $request->input('negeri');
        $daerah = $request->input('daerah');
        $mukim  = $request->input('mukim');
        $pakej = $request->input('pakej');
        $no_lot = $request->input('no_lot');
        $no_hakmilik = $request->input('hak_milik');
        $nama = $request->input('nama');
        $no_kp = $request->input('no_kp');
        $status_terima = $request->input('status_penerima');
        $pecahan = $request->input('pecah_bah');
        $nilai_tanah = $request->input('nilai_tanah');
        $status_tanah = $request->input('status');
        $luas_ambil = $request->input('luas_ambil');
        $kategori = $request->input('kategori');
        $amaun = $request->input('amaun_pampasan');
        $bank = $request->input('bank');
        $akaun = $request->input('akaun_bank');
        $kaedah_bayar = $request->input('kaedah_bayar');
        $baucer = $request->input('no_baucer');
        $t_baucer = $request->input('t_baucer');
        $cek = $request->input('no_cek');
        $t_cek = $request->input('t_cek');
        $status = $request->input('status');
        $catatan = $request->input('catatan');
        $rujukan = $request->input('ref');
        //$attach

        DB::insert('insert into borangh (blok, fasa, negeri, daerah, mukim, pakej, no_lot, no_hakmilik, nama, no_kp, status_penerima, pecahan, nilai_tanah, status_tanah, luas_ambil, kategori_pam, amaun_pam, bank, no_akaun, kaedah_bayar, no_baucer, t_baucer, no_cek, t_cek, status, catatan, rujukan)
                    values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [$blok, $fasa, $negeri, $daerah, $mukim, $pakej, $no_lot, $no_hakmilik, $nama, $no_kp, $status_terima, $pecahan, $nilai_tanah, $status_tanah, $luas_ambil, $kategori, $amaun, $bank, $akaun, $kaedah_bayar, $baucer, $t_baucer, $cek, $t_cek, $status, $catatan, $rujukan]);

        echo "Record inserted successfully.<br>";
        return redirect('/boranghmenu');
    }

    public function view()
    {
        $users = DB::select('select id, blok, no_lot, nama, no_kp from borangh');
        return view('members/boranghmenu',['users'=>$users]);
    }

    public function edit(Request $request,$id)
    {
        $blok = $request->input('blok');
        $fasa = $request->input('fasa');
        $negeri = $request->input('negeri');
        $daerah = $request->input('daerah');
        $mukim  = $request->input('mukim');
        $pakej = $request->input('pakej');
        $no_lot = $request->input('no_lot');
        $no_hakmilik = $request->input('hak_milik');
        $nama = $request->input('nama');
        $no_kp = $request->input('no_kp');
        $status_terima = $request->input('status_penerima');
        $pecahan = $request->input('pecah_bah');
        $nilai_tanah = $request->input('nilai_tanah');
        $status_tanah = $request->input('status');
        $luas_ambil = $request->input('luas_ambil');
        $kategori = $request->input('kategori');
        $amaun = $request->input('amaun_pampasan');
        $bank = $request->input('bank');
        $akaun = $request->input('akaun_bank');
        $kaedah_bayar = $request->input('kaedah_bayar');
        $baucer = $request->input('no_baucer');
        $t_baucer = $request->input('t_baucer');
        $cek = $request->input('no_cek');
        $t_cek = $request->input('t_cek');
        $status = $request->input('status');
        $catatan = $request->input('catatan');
        $rujukan = $request->input('ref');
/*
        DB::update('update borangh set
            blok = ?, fasa = ?, negeri = ?, daerah = ?, mukim = ?, pakej = ?, no_lot = ?, no_hakmilik = ?, nama = ?, no_kp = ?, status_penerima = ?, pecahan = ?, nilai_tanah = ?, status_tanah = ?, luas_ambil = ?, kategori_pam = ?, amaun_pam = ?, bank = ?, no_akaun = ?, kaedah_bayar = ?, no_baucer = ?, t_baucer = ?, no_cek = ?, t_cek = ?, status = ?, catatan = ?, rujukan = ?
            where id = ?',$blok, $fasa, $negeri, $daerah, $mukim, $pakej, $no_lot, $no_hakmilik, $nama, $no_kp, $status_terima, $pecahan, $nilai_tanah, $status_tanah, $luas_ambil, $kategori, $amaun, $bank, $akaun, $kaedah_bayar, $baucer, $t_baucer, $cek, $t_cek, $status, $catatan, $rujukan]);
*/
/*
        DB::table('borangh')
        ->where('id = ?')
        ->update(['']);
*/

        echo "Record updated successfully.";
        echo '<a href="/boranghmenu">Click here<a/> to go back.';
    }
}
