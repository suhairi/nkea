<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;

use App\Warta;




class WartaController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {
        return view('members/wartamenu');
    }

    public function indexwarta()
    {
        return view('members/wartaform');
    }
        
    public function insertform()
    {
        return view('wartaform');
    }


    //INSERT
    public function insert(Request $request)
    {
        $blok=$request->input('blok');
        $fasa=$request->input('fasa');
        $negeri=$request->input('negeri');
        $daerah=$request->input('daerah');
        $mukim=$request->input('mukim');
        $pakej=$request->input('pakej');
        $lot=$request->input('no_lot');
        $hak_milik=$request->input('hak_milik');
        $t_warta=$request->input('t_warta');
        $t_luput=$request->input('t_luputwarta');
        $jilid=$request->input('jilid');
        $no_warta=$request->input('no_warta');
        $rujukan=$request->input('rujukan');
        $catatan=$request->input('catatan');
        
        $sess = $request->session()->put('blok', 'fasa', 'negeri', 'daerah', 'mukim', 'pakej', 'no_lot', 'hak_milik', 'no_warta', 'jilid');

        DB::insert('insert into warta (
            kod_blok, fasa, negeri, daerah, mukim, pakej, no_lot, no_hakmilik, t_warta, t_luputwarta, jilid, no_warta, rujukan, catatan) values
            (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            [$blok, $fasa, $negeri, $daerah, $mukim, $pakej, $lot, $hak_milik, $t_warta, $t_luput, $jilid, $no_warta, $rujukan, $catatan]);

        //echo "Record inserted successfully.<br>";
        Session::flash('success', 'Berjaya. Maklumat Warta telah didaftarkan.');
        return redirect('/warta');
    }


    //data VIEW @ menu
    public function view()
    {
        $users = DB::select(
            'select * from blok_tersier a, warta b
            where b.kod_blok = a.kod_blok');
        return view('members/wartamenu',['users'=>$users]);
    }


    //UPDATE warta
    public function updateshow($id)
    {

        $warta = Warta::where('id', $id)->first();

        dd($warta);
        $warta = DB::select(
            'select * from warta where id = ?',array($id));

        foreach($warta as $data) {
            echo "ID : " . $data->id . "<br />";
            echo "Kod Blok : " . $data->getKodBlok($data->kod_blok) . "<br />";
        }
        
        return view('members/wartaupd',['warta'=>$data]);
    }

    public function updatedit(Request $request,$id)
    {
        $blok=$request->input('blok');
        $fasa=$request->input('fasa');
        $negeri=$request->input('negeri');
        $daerah=$request->input('daerah');
        $mukim=$request->input('mukim');
        $pakej=$request->input('pakej');
        $lot=$request->input('no_lot');
        $hak_milik=$request->input('hak_milik');
        $t_warta=$request->input('t_warta');
        $t_luput=$request->input('t_luputwarta');
        $jilid=$request->input('jilid');
        $no_warta=$request->input('no_warta');
        $rujukan=$request->input('rujukan');
        $catatan=$request->input('catatan');

        DB::update(
            'update warta
            set kod_blok = ?, fasa = ?, negeri = ?, daerah = ?, mukim = ?, pakej = ?, no_lot = ?, no_hakmilik = ?, t_warta = ?, t_luputwarta = ?, jilid = ?, no_warta = ?, rujukan = ?, catatan = ?
            where id = ?',
            [$blok, $fasa, $negeri, $daerah, $mukim, $pakej, $lot, $hak_milik, $t_warta, $t_luput, $jilid, $no_warta, $rujukan, $catatan, $id]
            );
    }

    //DELETE
    public function destroy($id)
    {
        DB::delete(
            'delete from warta
            where id = ?',[$id]);
        return redirect('warta');
    }

    //SESSION
    public function SessionData(Request $request)
    {
        $request->session()->put('blok','fasa', 'negeri', 'daerah', 'mukim', 'pakej');
        return view('membes/warta')->flash('Session success.');
    }

    public function deleteSession(Request $request)
    {
        $request->session()->forget('blok','fasa');
    }
}