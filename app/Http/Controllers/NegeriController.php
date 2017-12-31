<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class NegeriController extends Controller
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
        return view('members/negeri');
    }

    public function insertform()
    {
        return view('negeri');
    }

    public function insert(Request $request)
    {
        $kod = $request->input('kod_negeri');
        $desc = $request->input('desc_negeri');
        
        DB::insert('insert into negeri (
            kod_negeri, desc_negeri) values
            (?, ?)',
            [$kod, $desc]);

        echo "Record inserted successfully.<br>";
        return redirect('/addstate');
    }
}
