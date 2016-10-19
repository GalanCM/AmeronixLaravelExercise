<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public function notes() {
      return $this->hasMany('\App\Notes');
    }
}
