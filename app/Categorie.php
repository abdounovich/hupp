<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function instrument()
    {
        return $this->hasOne(Instrument::class);
    }
}
