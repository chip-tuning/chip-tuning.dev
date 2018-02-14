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