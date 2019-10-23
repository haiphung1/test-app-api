<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = [
        'name',
        'information',
        'deadline',
        'type',
        'status'
    ];
}
