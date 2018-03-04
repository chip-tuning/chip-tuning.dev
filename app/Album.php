<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title'];

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
	 * An album may have many photos.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function photos()
	{
		return $this->hasMany(Photo::class);
	}
}
