<?php
if ( ! function_exists('assets_url'))
{
	function assets_url($path=''){
		$CI =& get_instance();
		return $CI->config->item('assets_url').$path;
	}
}

if ( ! function_exists('assets_path'))
{
	function assets_path($path=''){
		$CI =& get_instance();
		return $CI->config->item('assets_path').$path;
	}
}
?>