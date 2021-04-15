<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloons extends Model
{
    public $table="bloons";
    public $timestamps=false;
    protected $fillable = 
    [
        'product_name','cost'
    ];
}
