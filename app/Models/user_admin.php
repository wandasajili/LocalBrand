<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
