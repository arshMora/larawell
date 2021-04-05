<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $table="primary_monkeys";
    public $timestamps=false;
    protected $fillable = 
    [
        'tower', 'description','cost','login','password'
    ];
}
