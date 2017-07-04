<?php

class connectDB {
    private $_userName;
    private $_userPassword;
    private $_dbName;
    private $_serverName;
    private $_db_charset;

    
    public function __construct() {
        $this->_userName = __UNAME__;
        $this->_userPassword = __PASSWD__;
        $this->_serverName = __HOST__;
        $this->_dbName = __DB_NAME__;
        $this->_db_charset = __DB_CHARSET_SET__;
    }
    public function connect(){
        $connectDB = mysqli_connect($this->_serverName, $this->_userName, $this->_userPassword, $this->_dbName);
        
        if($connectDB == false){
            die("Błąd połączenia: ".mysqli_connect_error()."ERNO: ".mysqli_connect_errno());
        }else{
            $connectDB->set_charset( $this->_db_charset);
            return $connectDB;
        }
    }
}
