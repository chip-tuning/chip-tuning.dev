<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Photo extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'small', 'medium', 'large', 'created_at'];

	/**
	 * Boot the model.
	 */
	protected static function boot()
	{
		parent::boot();

		static::saved(function () {
			Cache::forget('photos');
		});

		static::deleted(function () {
			Cache::forget('photos');
		});
	}

	/**
	 * Get the route key name.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'id';
	}

	/**
	 * A photo belongs to an album.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function album()
	{
		return $this->belongsTo(Album::class);
	}

	/**
	 * Get latest photos
	 * 	 
	 * @param  int $limit
	 */
	public static function fetchLatest(int $limit)
	{
		return static::take($limit)->latest()->get();
	}
}