<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'small', 'medium', 'large', 'created_at'];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at'];

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