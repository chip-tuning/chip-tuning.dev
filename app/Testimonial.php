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
	 * Boot the model.
	 */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('stars', function (Builder $builder) {
            $builder->where('stars', '>', 3);
        });
    }

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
	 * Get latest articles
	 *
	 * @param  int limit
	 */
	public static function fetchLatest(int $limit)
	{
		return static::take($limit)
		->latest()
		->get(['content', 'stars', 'author']);
	}

}
