<?php
class _Database{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect() {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password);
        
        // Check connection
        if ($conn->connect_error) {
        return false;
        }else{
            return $conn;
        }

    }


}

?>