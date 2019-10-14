<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = [
        'name',
        'information',
        'phone',
        'date_of_birth',
        'avatar',
        'position',
        'gender'
    ];
}
