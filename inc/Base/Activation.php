<?php
/**
 * When the plugin is activated on the Admin
 */

// Inc namespaces as defined in the "autoload" in composer.json
// references to the folder ./inc/base
namespace Inc\Base;


// Define the class name the same as the file name in order to
// psr-4 autoload to work properly
class Activation
{
  /**
   * STATIC methods allow to be called on other file without
   * the need of create an instance of its class to be used
   * with the syntax Activation::activate();
   */
  public static function activate(){
    flush_rewrite_rules();
  }
}