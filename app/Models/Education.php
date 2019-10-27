<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
    	'school', 'subject', 'time', 'description', 'user_id'
    ];
}
