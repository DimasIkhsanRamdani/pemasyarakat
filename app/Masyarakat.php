<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
      protected $table = 'masyarakats';

      protected $guarded = [];
    }
    public function user()
    {
      return $this->belongsTo('App\User');
}
