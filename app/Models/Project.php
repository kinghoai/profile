<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\Models\Media;

class Project extends Model implements HasMedia
{
	use HasMediaTrait;

	protected $fillable = [
		'title', 'content', 'user_id',
	];

	public function getImageAttribute()
	{
		return $this->getMedia('image');
	}
	public function getSlideAttribute()
	{
		return $this->getMedia('slide');
	}

	public function registerMediaConversions(Media $media = null)
	{
		$this->addMediaConversion('slide')
			->crop('crop-center', 885, 600);
	}
}
