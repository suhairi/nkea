<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borangk extends Model
{
    protected $table = 'borangk';
    protected $id = 'id';
    protected $fillable = 'blok','fasa','negeri','daerah','mukim','pakej','no_lot','hak_milik','tarikh_k','rujukan_k','fail';

    public $timestamp = false;

    public function getBorangk($id)
    {
    	$borangk = Borangk::where('id',$id);
    	return $borangk->blok;
    }
}
