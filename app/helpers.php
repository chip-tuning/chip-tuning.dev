<?php

if (!function_exists('set_active')) {
	/**
	 * Set active page
	 *
	 * @param  string $pattern
	 * @param  string $value
	 * @return string
	 */
	function set_active(string $pattern = '/', string $value = 'active') : string
	{
		return (request()->is($pattern)) ? $value : '';
	}
}

if (! function_exists('words')) {
	/**
	 * Limit the number of words in a string.
	 *
	 * @param  string  $value
	 * @param  int     $words
	 * @param  string  $end
	 * @return string
	 */
	function words($value, $words = 100, $end = '...')
	{
		return \Illuminate\Support\Str::words($value, $words, $end);
	}
}