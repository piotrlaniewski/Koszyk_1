<?php
error_reporting(E_ERROR | E_WARNING);
define( "__DEBUG__", 1);
define( "__PATH_LOG__", "logs/app_pytania.log");

//URL mojego serwisu
define("__URL__","http://localhost/koszyk/");
define( "__APP_URI__", $_SERVER["REQUEST_URI"] );

// Konfiguracja bazy danych
define("__HOST__","localhost");
define("__UNAME__", "root");
define("__PASSWD__", "");
define("__DB_NAME__", "zadanie212");
define("__DB_CHARSET_SET__","UTF8");
//koniec konfiguracji bazy

//router config file
define("__ROUTE_FILE__", "conf/routing.ini");
?>


