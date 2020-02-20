<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        'title', 'percent', 'level', 'type', 'user_id'
    ];

    public function user()
    {
    	return $this->belongsTo('App\Models\User');
    }
}
