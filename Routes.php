<?php 

class Routes {

    public static function methodGet($url, $action) {

        if($_SERVER['REQUEST_URI'] == $url  && $_SERVER['REQUEST_METHOD'] == 'GET') {
            $action();
        } die(); 
    }
}



