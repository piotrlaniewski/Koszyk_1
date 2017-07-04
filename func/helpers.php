<?php
/*
 * @param type $var
 * @param type $status (0 = off debug, 1 = on screen debug, 2 = on file debug)
 */

function debug ($var, $status = __DEBUG__){
    switch ($status){
        case "0":
            break;
        case"1":
             echo "<pre>",var_dump( $var ),"</pre>";
            break;
        case "2":
            error_log("Data log: ".date("Y-m-d H:i:s")." ". serialize($var)."\r\n", 3, __PATH_LOG__);
            break;
        default:
            break;
    }
}