<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); 
if(!function_exists('active_link')) { 
    function menuControler($controller) { 
        $CI = get_instance(); 
        $class = $CI->router->fetch_class(); 
        if($class == $controller)
            return 'active';
        else if($CI->uri->uri_string()==$controller)
            return 'active';
        else
            return '';
    } 
}
