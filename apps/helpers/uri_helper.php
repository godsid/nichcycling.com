<?php

/**
 * Site URL
 *
 * Create a local URL based on your basepath. Segments can be passed via the
 * first parameter either as a string or an array.
 *
 * @access	public
 * @param	string
 * @return	string
 */
if ( ! function_exists('uri_segments'))
{
	function uri_segments($segment = 0)
	{
		$CI =& get_instance();
		return $CI->uri->segments[$segment];
	}
}
?>