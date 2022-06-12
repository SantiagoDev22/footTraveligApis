<?php

class DBHandler {

    private $conn;

    function __construct(){ 
        require_once dirname(__FILE__) . './DBConnect.php';

        $db = new DBConnect();
        $this->conn = $db->connect();
    }
    
    public function createMenu($array){
        
    }
}

?>