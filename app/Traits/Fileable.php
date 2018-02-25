<?php

namespace App\Traits;

use App\File;

trait Fileable
{
    /**
	 * Fetch all files for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\morphMany
     */
    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    /**
     * Associate files with specific model.
     * @param  array $paths
     * @return void
     */
    public function associate(array $paths)
    {
    	$files = File::whereIn('path', $paths)->get();
    	$this->files()->saveMany($files);
    }
}