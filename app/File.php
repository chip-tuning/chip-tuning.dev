<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['path'];

	/**
	 * Get all of the owning fileable models.
	 * 
     * @return \Illuminate\Database\Eloquent\Relations\morphTo
	 */
	public function fileable()
	{
		return $this->morphTo();
	}
}
