<?php

namespace App\Traits;

use App\Tag;

trait Taggable
{
	/**
	 * Fetch all tags for the model.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
	 */
	public function tags()
	{
		return $this->morphToMany(Tag::class, 'taggable')->withTimestamps();
	}

	/**
	 * Create tags on the fly and sync them with the model.
	 * 
	 * @param  mixed $tags
	 * @return void
	 */
	public function tag($tags)
	{
		if (isset($tags))
		{
			$ids = [];
			foreach ($tags as $value)
			{
				$tag = Tag::firstOrCreate(['name' => $value]);
				$ids[] = $tag->id;
			}

			$this->tags()->sync($ids);
		}
	}
}