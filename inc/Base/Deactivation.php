<?php
/**
 * When the plugin is deactivated on the admin
 */

// Inc namespaces as defined in composer.json
// references to the folder ./inc/Base
namespace Inc\Base;

// Define the class name the same as the file name in order to
// psr-4 autoload to work properly
class Deactivation
{
  /**
   * STATIC methods allow to be called on other file without
   * the need of create an instance of its class to be used
   * with the syntax Deactivation::deactivate();
   */
  public static function deactivate(){
    flush_rewrite_rules();
  }
}