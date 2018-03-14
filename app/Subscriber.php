<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscriber extends Model
{
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'access_token'];

	/**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'confirmed' => 'boolean',
    ];

	/**
	 * Get the route key name.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'access_token';
	}

	/**
	* Mark the subscriber's account as confirmed.
	*/
	public function confirm()
	{
		$this->confirmed = true;
		$this->save();
	}
}
