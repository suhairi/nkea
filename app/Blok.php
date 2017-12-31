<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blok extends Model
{
    protected $table = 'blok_tersier';
    protected $id	= 'id';
    protected $fillable = ['no_blok','jum_lot_total','anggaran_kos','bil_lot_batal','lokaliti','bil_lot_bayar','phase','baki_lot'];

    public $timestamp = false;

    public function getBlok($id)
    {
    	$blok = Blok_tersier::where('id',$id)->first();
    	return $blok->no_blok;    	
    }

    public function warta()
    {
    	return $this->belongsToMany('App\Warta');
    }
}
