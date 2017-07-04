<?php


class routeController {
    
    public function __construct() {
        ;
    }
    
    public static function setRoute( $URI = ''){
        $index = explode("/", $URI);
        $routing = parse_ini_file(__ROUTE_FILE__);
        
        switch(true){
            case($index[2] == ''):
                return 'index';
            case (array_key_exists($index[2], $routing) == true):
                return $routing[$index[2]];
            default:
                //include "vievs/error/404";
               // die ('Strona nie istnieje');
        }
        debug($index);
        debug($routing);
    }
    public static function get( $URI = '/'){
        $param = explode("/", $URI);
        
        return array ( $param[3] );
    }
}
