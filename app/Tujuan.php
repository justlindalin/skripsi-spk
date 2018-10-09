<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tujuan extends Model
{
    protected $table ='tujuans';
    protected $fillable =['alamat'];
    public $timestamps = false;

    public function distribusis(){
      return $this->hasMany('App\Distribusi');
    }
}
