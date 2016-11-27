<?php
if (! function_exists('active')) {
    /**
     * Checks if current route is active and and return active class
     * @param $route
     * @param string $class
     * @return string
     */
    function active($route, $class = 'active')
    {
        if(Route::is($route)) {
            return $class;
        }
        return '';
    }
}