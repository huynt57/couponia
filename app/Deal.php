<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //

    protected $fillable = [
        'name',
        'account_id',
        'description',
        'valid_from',
        'valid_to',
        'original_price',
        'new_price',
        'lat',
        'lng',
        'location',
        'is_hot',
        'code',
        'online_url',
        'image_preview',
        'status',
        'category_id',
        'category_name',
        'condition',
        'source',
    ];

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    protected $dates = ['created_at', 'updated_at', 'valid_from', 'valid_to'];
}
