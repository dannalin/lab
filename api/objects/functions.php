<?php
class Functions{
    // database connection and table name
    private $conn;
    private $table_name = "functions";

    // object properties
    public $function_name;
    public $id;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }

    // read all functions
    function read() {

        // select all query
        $query = " SELECT function_name FROM";
        $query .= $this->table_name;

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute();
        
        return $stmt;
    }

    function readOne() {

        // query to read single record
        $query = " SELECT id, function_name FROM";
        $query .= $this->table_name;
        $query .= " WHERE id = ?";

        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // bind id of function to be updated
        $stmt->bindParam(1, $this->id);

        // execute query
        $stmt->excute();

        return $stmt;
    }
}