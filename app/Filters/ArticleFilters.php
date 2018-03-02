<?php

namespace App\Filters;

use App\Tag;
use Illuminate\Support\Carbon;

class ArticleFilters extends Filters
{
	/**
	 * Registered filters to operate upon.
	 *
	 * @var array
	 */
	protected $filters = ['tag', 'datum'];

	/**
	 * Filter the query by a given tag name.
	 *
	 * @param  string $tag
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	protected function tag($tag)
	{
		$tag = Tag::where('name', $tag)->firstOrFail();

		return $this->builder->whereHas('tags', function($query) use ($tag) {
			$query->where('tag_id', $tag->id);
		});
	}

	/**
	 * Filter the query by a given date.
	 *
	 * @param  string $tag
	 * @return \Illuminate\Database\Eloquent\Builder
	 */
	protected function datum($date)
	{
		$date = explode('/', $date);

		return $this->builder->whereMonth('created_at', $date[0])->whereYear('created_at', $date[1]);
	}
}