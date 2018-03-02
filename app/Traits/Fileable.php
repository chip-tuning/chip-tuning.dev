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
     * @param  array $ids
     * @return void
     */
    public function associate(array $ids)
    {
    	$files = File::whereIn('id', $ids)->get();
    	$this->files()->saveMany($files);
    }

    /**
     * Disassociate files with specific model.
     * @param  array $ids
     * @return void
     */
    public function disassociate()
    {
        $this->files()->update(['fileable_type' => NULL, 'fileable_id' => NULL]);
    }
}