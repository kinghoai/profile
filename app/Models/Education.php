<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
    	'icon', 'school', 'subjects', 'time', 'description', 'user_id'
    ];
}
