<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public function categorie()
    {
        return $this->belongsTo(Categorie::class,'category_id');
    }
}
