<?php 

// Inc namespaces as defined in the "autoload" in composer.json
// references to the folder ./inc/Base
namespace Inc\Base;

// Define the class name the same as the file name in order to
// psr-4 autoload to work properly
class Enqueue 
{
  /**
   * Called at the creation of the class instance. 
   * Used in Init.php
   */
  public function register(){
    // plugins' assets enqueque
    add_action( 'admin_enqueue_scripts', array($this, 'enqueue_admin') );
    add_action( 'wp_enqueue_scripts', array($this, 'enqueue') );
  }

  /**
   * Front-end assets
   */
  public function enqueue(){
    // enqueue styles
    wp_enqueue_style( 'paoloplugin_css', PLUGIN_URL . 'assets/css/main.css');

    // enqueue scripts
    wp_enqueue_script( 'paoloplugin_js', PLUGIN_URL . 'assets/js/main.js', array('jquery'), true );
  }

  /**
   * Admin assets
   */
  public function enqueue_admin(){
    // enqueue styles
    wp_enqueue_style( 'paoloplugin_admincss', PLUGIN_URL . 'assets/css/admin.css');

    // enqueue scripts
    wp_enqueue_script( 'paoloplugin_adminjs', PLUGIN_URL . 'assets/js/admin.js', array('jquery'), true );
  }
}