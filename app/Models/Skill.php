<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'title', 'percent', 'level', 'type', 'user_id'
    ];
}
