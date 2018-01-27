<?php 

// Inc namespaces as defined in composer.json
// references to the folder ./inc
namespace Inc;



/**
 * AUTOMATICALLY INITIALIZE THE GIVEN PLUGIN'S CLASSES
 * Final is used to prevent this class to be modified.
 * 
 * Define the class name the same as the file name in order to
 * psr-4 autoload to work properly.
 */
final class Init
{
  /**
   * Store all classes inside an array.
   * Define here the classes you want to initialize
   * 
   * @return array List of all classes
   */
  public static function get_services(){
    return array(
      Pages\Admin::class,
      Base\Enqueue::class
    );
  }

  /**
   * Loop through the classes, initialize them and 
   * call the register() method if it exists
   * Uses 'self' to reference static methods
   */
  public static function register_services(){
    foreach (self::get_services() as $class) {
      // create an instance of the class
      $service = new $class;
      
      // call the register() method of the class
      // if exists
      if( method_exists($service, 'register') ){
        $service->register();
      }
    }
  }  
}