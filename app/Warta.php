<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Blok;

class Warta extends Model
{
    protected $table = 'warta';
    protected $id = 'id';
    protected $fillable = ['kod_blok', 'fasa', 'negeri', 'daerah', 'mukim', 'pakej', 'no_lot', 'no_hakmilik', 't_warta', 't_luputwarta', 'jilid', 'no_warta', 'rujukan', 'catatan'];
    public $timestamp = false;


    public function getWarta($id)
    {
    	$warta = Warta::where('id',$id)->first();
    	return $warta->blok;
    }

    public function getKodBlok($id) {

    	$kodBlok = Blok::where('id', $id)->first();
    	return $kodBlok->no_blok;


    }

}
