<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kukuzer extends Model
{
    public $table="registr";
    public $timestamps=false;
    protected $fillable = 
    [
        'login','password'
    ];
}
