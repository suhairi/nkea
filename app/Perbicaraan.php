<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perbicaraan extends Model
{
    protected $table = 'perbicaraan';
    protected $id = 'id';
    protected $fillable = ['no_blok','fasa','negeri','daerah','mukim','pakej','no_lot','no_hakmilik','jajaran','t_bicara','status_bicara','bil_pemilik', 'luas_pengambilan','nilai_tanah','pampasan','lain_pampasan','jum_pampasan','catatan'];
    public $timestamp = false;

    public function getBicara()
    {
    	$bicara = Bicara::where('id',$id)->first();
    	return $bicara->no_blok;
    }
}
