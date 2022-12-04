<?php 
/**
 * adds basic functionalities to the theme
 * 
 * @package frx
 */

 namespace FRX_THEME\Inc;

 use FRX_THEME\Inc\Traits\Singleton;

 class FRX_THEME{
    use Singleton;

    protected function __construct(){
        //load classes
        $this->setup_hooks();
    }
 

    protected function setup_hooks(){
        //actions and filters
    }
}


?>