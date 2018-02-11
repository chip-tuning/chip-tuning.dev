<?php

if (!function_exists('set_active')) {
	/**
	 * Set active page
	 *
	 * @param string $pattern
	 * @return string
	 */
	function set_active(string $pattern = '/') : string
	{
		return (request()->is($pattern)) ? 'active' : '';
	}
}