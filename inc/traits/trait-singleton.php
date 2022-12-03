<?php namespace frx_Theme\Inc\Traits;

trait Singleton{
    public function __construct(){

    }

    public function __clone(){
        
    }

    final public static function get_instance(){
        static $instance = [];
        $called_class = get_called_class();

        if(!isset($instance[$called_class])){
            $instance[$called_class] = new $called_class();

            do_action(sprintf('frx_theme_singleton_init%s', $called_classs));
        }
        return $instance[$called_class];
    }
}
?>