<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop extends Authenticatable
{
    protected $table = 'shop';

    protected $fillable = ['email', 'password','store_name'];

    protected $hidden = ['remember_token'];

    protected $casts = ['email_verified_at' => 'datetime', ];

    public $timestamps = false;
}
