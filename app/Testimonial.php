<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Testimonial extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['content', 'stars', 'author', 'created_at'];

	/**
	 * Set the content.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setContentAttribute($value)
	{
		$this->attributes['content'] = preg_replace("/[\t\n\r]/", " ", $value); 
	}

	/**
     * Scope a query to only include popular testimonials.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
	public function scopePopular($query)
	{
		return $query->where('stars', '>', 3);
	}

	/**
	 * Get latest testimonials
	 *
	 * @param  int limit
	 */
	public static function fetchLatest(int $limit)
	{
		return static::popular()
		->take($limit)
		->latest()
		->get(['content', 'stars', 'author']);
	}

}
