<?php
Class DatabaseSqlsrv {
    // specify your own database credentials
    private $host= "10.227.24.78";
    private $port = '1433';
    private $db_name = "04196414";
    private $username = "ehrview";
    private $password = "viewehr";
    public $conn;

     // get the database connection
     public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO("sqlsrv:server=" . $this->host . ";Database=" . $this->db_name, $this->username, $this->password);
        } catch (PDOExction $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
     }
}