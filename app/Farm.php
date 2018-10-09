<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    protected $table ='farms';

    protected $fillable = [
      'nama','alamat','jumlah_kambing','jumlah_sapi',
    ];

    public $timestamps=false;

    public function distribusis(){
      return $this->hasMany('App\Distribusi');
    }

}
