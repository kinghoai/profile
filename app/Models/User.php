<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class User extends Authenticatable implements HasMedia
{
	use HasMediaTrait;
    use Notifiable;

    public function getImageAttribute()
    {
    	return $this->getMedia('image')->last();
    }

	public function registerMediaConversions(Media $media = null)
	{
		$this->addMediaConversion('thumb')
			->width(180)
			->height(180);
	}

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'email', 'password', 'phone', 'address', 'birthday', 'job', 'about_description', 'skill_description', 'knowledge_description', 'language_description', 'experience_description', 'education_description', 'project_description', 'contact_description', 'facebook', 'twitter', 'google', 'youtube', 'linkedin'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
