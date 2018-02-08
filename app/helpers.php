<?php

if (!function_exists('set_active')) {
	/**
	 * Set active page
	 *
	 * @param string $name
	 * @return string
	 */
	function set_active(string $name) : string
	{
		if (!is_null(request()->route()))
	    	return request()->route()->named($name) ? ' class=active' : '';
	    else
	    	return '';
	}
}