<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Tag extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name'];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = ['pivot'];

	/**
	 * Boot the model.
	 */
	protected static function boot()
	{
		parent::boot();

		static::saved(function () {
			Cache::forget('tags');
		});

		static::deleted(function () {
			Cache::forget('tags');
		});
	}

	/**
	 * Get the route key name.
	 *
	 * @return string
	 */
	public function getRouteKeyName()
	{
		return 'name';
	}

	/**
	 * There can be multiple articles that are assigned this tag.
	 * 
	 * @return \Illuminate\Database\Eloquent\Relations\morphedByMany
	 */
	public function articles()
	{
		return $this->morphedByMany(Article::class, 'taggable');
	}

	/**
	 * Get tags associated with published articles
	 *
	 * @param  int $limit
	 */
	public static function fetchLatest(int $limit)
	{
		return static::has('articles')->latest()->take($limit)->pluck('name');        
	}

	/**
	 * Get tags associated with model sorted by most used
	 * 
	 * @param  int|integer $limit
	 * @param  string      $model
	 * @return Illuminate\Database\Eloquent\Collection
	public static function fetchByMostUsed(int $limit = 15, string $model = 'App\Article')
	{
		return static::select('tags.id', 'tags.name')
			->join('taggables', 'tags.id', '=', 'taggables.tag_id')
			->selectRaw('count(taggables.tag_id) aggregate')
			->where('taggables.taggable_type', '=', $model)
			->groupBy('tags.id', 'tags.name')
			->orderBy('aggregate', 'desc')
			->limit($limit)
			->pluck('name');
	}
	*/
}
