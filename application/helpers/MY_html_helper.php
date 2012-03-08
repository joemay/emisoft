<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('js'))
{
	function js($src = '')
	{
		$js_link = '<script type="text/javascript" src="'.site_url($src).'"></script>';		
		return $js_link;
	}
}


/* End of file form_helper.php */
/* Location: ./system/helpers/form_helper.php */