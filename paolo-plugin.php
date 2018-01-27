<?php
/**
 * Plugin Name: Paolo Plugin
 * Plugin URI: http://gith-hub-repo.com
 * Description: My first plugin for WordPress. It's learning time: plugin developed with OOP!
 * Version: 1.0.0
 * Author: Paolo Duzioni
 * Author URI: http://www.paoloduzioni.com
 * License: GPL2
    Paolo Plugin is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.
    
    Paolo Plugin is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
    
    You should have received a copy of the GNU General Public License
    along with Paolo Plugin. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
 */



/*******************************************
 * SECURITY
 * Check if somebody tries to get into this 
 * file not via wordpress
 *******************************************/
 if ( !defined('ABSPATH') ){ die; }



/*******************************************
  GLOBAL CONSTANTS
*******************************************/
define('PLUGIN_PATH', plugin_dir_path( __FILE__ ));
define('PLUGIN_URL', plugin_dir_url( __FILE__ ));
define('PLUGIN_NAME', plugin_basename(__FILE__));



/*******************************************
  COMPOSER AUTOLOAD REQUIRE
*******************************************/
if( file_exists( dirname(__FILE__) . '/vendor/autoload.php' ) ){
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}



/*******************************************
  ACTIVATION & DEACTIVATION EVENTS
*******************************************/
function activate_paolo_plugin(){
  Inc\Base\Activation::activate();
}
function deactivate_paolo_plugin(){
  Inc\Base\Deactivation::deactivate();
}

// NOTE: those two hooks cant be used inside a class
register_activation_hook( __FILE__, 'activate_paolo_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_paolo_plugin' );



/*******************************************
  INITIALIZE PLUGIN'S CLASSES
*******************************************/
if( class_exists('Inc\\Init') ){
  Inc\Init::register_services();
}