<?php
class Database{
    
    //connection parameters 
    var $host = 'localhost';
    var $user = 'a1671gwu_gupshup';
    var $password = '6s93dz~B9$5H';
    var $database = 'a1671gwu_gupshup';
    var $persistent = false;
    var $conn = NULL;
    var $result = false;
    
    function open(){
        $con = mysqli_connect('localhost', $this->user, $this->password, $this->database);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }
        return $con;
    }
    
}
