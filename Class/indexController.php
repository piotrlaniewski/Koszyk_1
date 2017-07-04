<?php

class indexController {
    private $_view;
    private $_db;
    
    public function __construct() {
        $this->_view = new viewController;
        $this->_db = new connectDB;
    }
    public function index(){
        $data = array();
        echo $query = "SELECT * FROM produkty";
        $resultQuery = $this->_db->connect()->query("SELECT * FROM produkty");
        if ($resultQuery->num_rows > 0) {
            while($row = $resultQuery->fetch_assoc()){
                $data[] = new modelPytaniaClass( $row );
        }
        }
        $this->_view->renderTemplate('views/koszyk/koszyk.phtml', $data);
    }
    
    
    }
    
