<?php 
/**
 * Authority
 *
 * Authority is an authorization library for CodeIgniter 2+ and PHPActiveRecord
 * This library is inspired by, and largely based off, Ryan Bates' CanCan gem
 * for Ruby on Rails.  It is not a 1:1 port, but the essentials are available.
 * Please check out his work at http://github.com/ryanb/cancan/
 *
 * @package     Authority
 * @version     0.0.3
 * @author      Matthew Machuga
 * @license     MIT License
 * @copyright   2011 Matthew Machuga
 * @link        http://github.com/machuga
 *
 **/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');


require 'authority/ability.php';
require 'authority/rule.php';

class Authority extends Authority\Ability {

    public static function initialize($user)
    {
		Authority :: action_alias('manage', array('manage','view','create', 'read', 'update', 'delete', 'hide', 'approve', 'edit'));
		
		
		if(empty($user -> username)) {
			
			Authority :: allow('view', 'Post', function($post) {
				return $post -> is_displayed == 1;
			});	
			
			Authority :: deny('view', 'Post', function($post) {
				return $post -> is_displayed == 0;
			});
			
			Authority :: allow('view', 'Author');
		}
		
		if($user -> get_role() == 'admin') {
			Authority::allow('manage', 'all');
         
			Authority :: allow('approve', 'Post');
			Authority :: allow('hide', 'Post');
			
			Authority :: deny('delete', 'Post', function ($post) use ($user) {
                return $post -> author_id != $user -> author -> get() -> id;
            });
			
			Authority :: deny('edit', 'Post', function ($post) use ($user) {
                return $post -> author_id != $user -> author -> get() -> id;
            });
			
            Authority :: allow('view', 'Post');
            
            Authority :: allow('manage', 'Theme');
            
            Authority :: allow('manage', 'User');
			
		}		
		
		if($user -> get_role() == 'user') {
			Authority::allow('manage', 'Post', function ($post) use ($user){
				return $post -> author_id == $user -> author -> get() -> id;
			});
			
			
			
			Authority :: deny('view', 'Post', function ($post) {
				$not_for_display = $post -> is_displayed == 0;
				return $not_for_display;
			});
			
			
			Authority :: allow('view', 'Post', function ($post) use ($user){
				$for_display = $post -> is_displayed == 1;
				$same_author = $post -> author -> get() -> id 
				             == $user -> author -> get() -> id;
				return $for_display || $same_author ;
			});
			
			Authority::allow('edit', 'Author', function($author) use ($user) {
				return ($author -> id) == ($user -> author -> get() -> id);
			});
			
		}
		
        // an example configuration

        /*
        Authority::action_alias('manage', array('create', 'read', 'update', 'delete'));
        Authority::action_alias('moderate', array('update', 'delete', 'edit'));

        if ( ! $user || ! $user->role) return false;

        if ($user->role == 'admin')
        {
            Authority::allow('manage', 'all');
            Authority::deny('update', 'User', function ($a_user) use ($user) {
                return $a_user->id !== $user->id;
            });
        }

        if ($user->role == 'member')
        {

            Authority::allow('manage', 'Project');
            Authority::allow('manage', 'User', function($a_user) use ($user) {
                return $user->id == $a_user->id;
            });
        }

        if ($user->role == 'client')
        {
            Authority::allow('read', 'Project', function($project) use ($user) {
                return $user->company_id == $project->company_id;
            });
        }
        */
    }

    protected static function current_user()
    {
		$ci =& get_instance();
		$ci -> load -> helper('ag_auth');
		if(logged_in()) {
			$current_user = current_user();
			return $current_user;
		} else {
			$user = new User();
			return $user;
		  }
    }
}
