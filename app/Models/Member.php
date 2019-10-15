<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
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
