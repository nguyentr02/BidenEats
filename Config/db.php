<?php
class db{

    private $servername = "fdb33.awardspace.net";
    private $username = "4089761_ivy";
    private $password = "xbUIv)V@0+GyH#mU";
    private $db = "4089761_ivy";
    private $conn;

    public function connect(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->db."", $this->username, $this->password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        return $this->conn;
    }
    
}

?>