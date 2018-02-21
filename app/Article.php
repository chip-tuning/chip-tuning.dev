<?php

namespace App;

use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class Article extends Model
{
	use Taggable;
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'title', 'slug', 'summary', 'content', 'published_at'];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['deleted_at', 'published_at'];

	/**
	 * The relationships to always eager-load.
	 *
	 * @var array
	 */
	protected $with = ['user', 'pictures', 'tags'];

	/**
	 * Get the route key name.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'slug';
	}

	/**
	 * A thread belongs to a user.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo(User::class);
	}

	/**
	 * An article may have many pictures.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function pictures()
	{
		return $this->hasMany(Picture::class);
	}

	/**
	 * Set the title.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setTitleAttribute($value)
	{
		$this->attributes['title'] = ucfirst($value);
	}

	/**
	 * Set the slug.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setSlugAttribute($value)
	{
		$this->attributes['slug'] = str_slug($value);
	}

	/**
	 * Set the published at.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setPublishedAtAttribute($value)
	{
		$this->attributes['published_at'] = isset($value) 
		? Carbon::createFromFormat('d/m/Y H:i:s', $value) 
		: Carbon::now();
	}


	/**
	 * Scope queries to articles that have been published.
	 * 
	 * @param  $query
	 */    
	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}

	/**
	 * Scope queries to articles that are unpublished.
	 * 
	 * @param  $query
	 */
	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}

	/**
	 * Get data for archive
	 */
	public static function archives()
	{
		return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published_at')
			->groupBy('year', 'month')
			->orderByRaw('min(created_at) desc')
			->get()
			->toArray();
	}
}
