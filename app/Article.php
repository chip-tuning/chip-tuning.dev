<?php

namespace App;

use App\Filters\ArticleFilters;
use App\Traits\Fileable;
use App\Traits\Taggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Cache;
use Laravel\Scout\Searchable;
use Stevebauman\Purify\Facades\Purify;

class Article extends Model
{
	use Taggable;
	use Fileable;
	use Searchable;
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'title', 'slug', 'picture', 'summary', 'content', 'published_at'];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = ['user_id'];

	/**
	 * The attributes that should be mutated to dates.
	 *
	 * @var array
	 */
	protected $dates = ['published_at', 'deleted_at'];

	/**
	 * Boot the model.
	 */
	protected static function boot()
	{
		parent::boot();

		static::saved(function () {
			Cache::forget('archives');
			Cache::forget('popular');
			Cache::forget('articles');
		});

		static::deleted(function () {
			Cache::forget('popular');
			Cache::forget('articles');
			Cache::forget('archives');
		});

		static::restored(function () {
			Cache::forget('popular');
			Cache::forget('articles');
			Cache::forget('archives');
		});

		static::addGlobalScope('author', function($builder) {
			$builder->with('author:id,name');
		});
	}

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
	 * Set the summary.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setSummaryAttribute($value)
	{
		$this->attributes['summary'] = preg_replace("/[\n\r]/", "", Purify::clean($value));
	}

	/**
	 * Set the content.
	 *
	 * @param  string  $value
	 * @return void
	 */
	public function setContentAttribute($value)
	{
		$this->attributes['content'] = Purify::clean($value);
	}

	/**
	 * A thread belongs to a author.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	/**
	 * Apply all relevant article filters.
	 *
	 * @param  Builder       $query
	 * @param  ThreadFilters $filters
	 * @return Builder
	 */
	public function scopeFilter($query, ArticleFilters $filters)
	{
		return $filters->apply($query);
	}

	/**
	 * Get latest articles
	 *
	 * @param  int limit
	 */
	public static function fetchLatest(int $limit)
	{
		return static::withoutGlobalScopes()
		->take($limit)
		->latest()
		->get(['id', 'title', 'slug', 'published_at']);
	}

	/**
	 * Get data for archive
	 */
	public static function archives()
	{
		return static::selectRaw('year(published_at) year, month(published_at) as month, monthname(published_at) month_name, count(*) published')
			->groupBy('year', 'month', 'month_name')
			->orderByRaw('min(published_at) desc')
			->get();
	}
}
