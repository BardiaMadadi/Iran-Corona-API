<?php
class _Database{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "irancorona";


    public function connect() {
        // Create connection
        $conn = new mysqli($this->servername, $this->username, $this->password,$this->dbname);
        
        // Check connection
        if ($conn->connect_error) {
        return false;
        }else{
            return $conn;
        }

    }

    public function addrow($cases,$death,$recovered){
        $conn = $this->connect();
        $sql = "INSERT INTO `covid19`(`id`, `cases`, `death`, `recovered`) VALUES (null,$cases,$death,$recovered)";
        if($conn->query($sql)){
            return true;
        }else{
            return false;
        }
        

    }

}

?>