<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClass extends Model
{
    public static function create(string $id){
return $id+10;

    }
}
