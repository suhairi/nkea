<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TetapanController extends Controller
{
    public function index()
    {
    	return view('members/tetapan');
    }
}
