<?php

namespace App;

use Elasticquent\ElasticquentTrait;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    use ElasticquentTrait;


    protected $fillable = [
        'name',
        'account_id',
        'price',
        'source',
        'aff_link',
        'product_version',

        'image_preview',
        'status',
        'product_version',
        'product_url',
        'alias'
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
    );

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    protected $dates = ['created_at', 'updated_at'];
}
