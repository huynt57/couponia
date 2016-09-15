<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    protected $fillable = ['email'];

    protected $dates = ['created_at', 'updated_at'];

}
