<?php

class modelKoszykClass {
    private $_id;
    private $_nazwa;
    
    public function __construct(array $data = []){
        $this->_id = $data["id"];
        $this->_nazwa = $data["nazwa"];

    }


    public function __set($name, $value) {
        $this->$name = $value;
    }
    public function __get($name){
        return $this->$name;
    }
}
