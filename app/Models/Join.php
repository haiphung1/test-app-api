<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    protected $table = 'joins';
    protected $fillable = [
        'project_id',
        'member_id',
        'role'
    ];

    public function members()
    {
        return $this->belongsTo(Member::class, 'member_id', 'id');
    }

    public function projects()
    {
        return $this->belongsTo(Project::class, 'project_id', 'id');
    }
}
