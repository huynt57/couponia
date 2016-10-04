<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $fillable = [
        'name',
        'alias',
        'image_preview',
        'status',
        'created_at',
        'updated_at',
    ];

    protected $dates = ['created_at', 'updated_at'];


    public function dealProvider() {
        return $this->hasOne('App\Deal', 'source', 'id');
    }
}
