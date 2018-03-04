<?php

namespace App\Http\Controllers\Admin\Api;

use App\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DropzoneController extends Controller
{
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function store()
	{
		$validator = validator(request()->all(), [
			'file' => 'required|image|max:3072'
		]);

		if ($validator->fails())
			return response()->json($validator->errors(), 422);

		$path = request()->file('file')->store('files', 'public');
		$file = File::create(['path' => $path]);
		
		return response()->json(['id' => $file->id, 'path' => $path, 'url' => Storage::disk('public')->url($path)], 200);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $filename
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($filename)
	{

		$file = File::where('path', "files/{$filename}")->first();

		if (is_null($file))
			return response(['status' => false], 422);

		Storage::disk('public')->delete($file->path);
		$file->delete();
		
		return response(['status' => true], 200);
	}
}
