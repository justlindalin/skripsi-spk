<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $table ='distribusis'; // jika ingin nama tabelnya Admin

    protected $fillable = [
      'admin_id','tujuan_id','farm_id','jenis_hewan','berat_permintaan','biaya_pengiriman',
    ];

    public $timestamps=false;

    public function user(){
      return $this->belongsTo('App\User');
    }

    public function tujuan(){
      return $this->belongsTo('App\Tujuan');
    }

    public function farm(){
      return $this->belongsTo('App\Farm');
    }
}
