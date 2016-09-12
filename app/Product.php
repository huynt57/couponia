<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'account_id',
        'price',
        'source',
        'aff_link',
        'product_version',

        'image_preview',
        'status',
    ];

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    protected $dates = ['created_at', 'updated_at'];
}
