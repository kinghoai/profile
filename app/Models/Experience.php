<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
    	'company', 'job', 'time', 'description', 'user_id'
    ];
}
