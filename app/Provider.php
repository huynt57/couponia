<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    public function dealProvider() {
        return $this->hasOne('App\Deal', 'source', 'id');
    }
}
