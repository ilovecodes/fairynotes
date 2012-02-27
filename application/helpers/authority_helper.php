<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

if ( ! function_exists('can') && ! function_exists('cannot') && !function_exists('authorize'))
{
    function can($action, $resource, $resource_val = null)
    {
        return Authority::can($action, $resource, $resource_val);
    }

    function cannot($action, $resource, $resource_val = null)
    {
        return ! can($action, $resource, $resource_val);
    }
    
    function authorize($action, $resource, $backlink_url, 
                       $backlink_message, $resource_val=null) {
		
        if(cannot($action, $resource, $resource_val)) {
			redirect('welcome/access_denied', 'refresh');
		}
    }
}
