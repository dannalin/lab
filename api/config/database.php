<?php
Class Database {

    // specify your own database credentials
    private $host= "10.227.24.121";
    private $db_name = "intranat";
    private $username = "sa";
    private $password = "zo6xj/6CC";
    public $conn;

    // get the database connection
    public function getConnection() {
        
        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOExction $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}