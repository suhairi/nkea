<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Session;
use Validator;

use App\Blok;
use App\Warta;

class Warta2Controller extends Controller
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

    public function kontinjenPost(Request $request)
    {

        // return $request->all();

        // Validation
        $validation = Validator::make($request->all(), [
                        'nama'      => 'required|min:3',
                        'role'      => 'required',
                        'nokp'      => 'required',
                        'notel'     => 'required',
                        'jantina'   => 'required'

                    ]);

        if($validation->fails())
        {
            Session::flash('error', 'Gagal. Sila isi semua ruangan yang wajib dengan format yang betul.');
            return back()->withInput($request->all());
    	}
    }
    
}
