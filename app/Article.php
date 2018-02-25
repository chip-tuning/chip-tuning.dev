<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Taggable;
use App\Traits\Fileable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
	use Taggable;
	use Fileable;
	use SoftDeletes;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['user_id', 'title', 'slug', 'summary', 'content'];

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
	protected $dates = ['deleted_at'];

	/**
	 * Boot the model.
	 */
	public static function boot() 
	{
		parent::boot();

		static::AddGlobalScope('author', function($builder) {
			$builder->with('author:id,name');
		});

		static::AddGlobalScope('tags', function($builder) {
			$builder->with('tags:name');
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
	 * A thread belongs to a author.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function author()
	{
		return $this->belongsTo(User::class, 'user_id');
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
			->latest('created_at')
			->get(['id', 'title', 'slug', 'created_at']);
	}

	/**
	 * Get data for archive
	 */
	public static function archives()
	{
		return static::selectRaw('year(created_at) year, month(created_at) as month, monthname(created_at) month_name, count(*) published')
			->groupBy('year', 'month', 'month_name')
			->orderByRaw('min(created_at) desc')
			->get();
	}
}
