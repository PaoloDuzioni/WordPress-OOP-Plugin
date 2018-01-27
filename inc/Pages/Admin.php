<?php 

// Inc namespaces as defined in the "autoload" in composer.json
// references to the folder ./inc/Pages
namespace Inc\Pages;

// Define the class name the same as the file name in order to
// psr-4 autoload to work properly
class Admin 
{
  /**
   * Called at the creation of the class instance. 
   * Used in Init.php
   */
  public function register(){
    // plugin's settings menu
    add_action( 'admin_menu', array($this, 'add_admin_pages') );

    // plugin's custom link on admin plugins list page
    add_filter( 'plugin_action_links_' . PLUGIN_NAME, array($this, 'settings_links') );
  }


  /**
   * PLUGIN'S SETTING PAGES
   */
  public function add_admin_pages(){
    add_menu_page( 'Paolo Plugin', 'PP Books', 'manage_options', 'paolo_plugin', array($this, 'admin_index'), 'dashicons-store', 110 );
  }


  /**
   * SETTING PAGE TEMPLATE
   */
  public function admin_index(){
    require_once PLUGIN_PATH . 'templates/admin.php';
  }
  

  /**
   * CUSTOM PLUGIN LINKS
   * 
   * Display a custom link on the admin plugin list
   */
  public function settings_links($default_links){
    // Create your custom link
    // href has the format: admin.php?page=plugin_page_url
    // as defined on the function 'add_menu_page() inside the 
    // add_admin_pages method
    $custom_link = '<a href="admin.php?page=paolo_plugin">Settings</a>';

    // Push it in the default links array
    array_push($default_links, $custom_link);

    // remember to return this array as this method is called for a 
    // filter hook
    return $default_links;
  }
}