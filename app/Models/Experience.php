<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
    	'icon', 'company', 'job', 'time', 'description', 'user_id'
    ];
}
