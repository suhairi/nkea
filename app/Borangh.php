<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borangh extends Model
{
    protected $table = 'borangh';
    protected $id = 'id';
    protected $fillable = [''];
    public $timestamp = false;

    public function getBorangh()
    {
    	$borangh = Borangh::where('id',$id)->first();
    	return $borangh->blok;
    }

}
