<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    public function contact() {
      return $this->belongsTo('Contact');
    }
}
