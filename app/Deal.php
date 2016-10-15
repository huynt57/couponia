<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Elasticquent\ElasticquentTrait;

class Deal extends Model
{
    //
    use ElasticquentTrait;

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
        'alias',
        'short_desc'
    ];

    protected $mappingProperties = array(
        'name' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],

        'description' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],

        'alias' => [
            'type' => 'string',
            "analyzer" => "standard",
        ],
    );

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function provider() {
        return $this->belongsTo('App\Provider', 'source', 'id');
    }

    protected $dates = ['created_at', 'updated_at', 'valid_from', 'valid_to'];
}
