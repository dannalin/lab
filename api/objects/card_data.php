<?php
class CardData {

    // database connection and table name
    private $conn;
    private $table_name = "vwZZ_CARD_DATA";

    // object properties
    public $EMPLOYEE_ID;
    public $EMPLOYEE_NO;
    public $EMPLOYEE_CNAME;
    public $PINHOLE_PLOTTER_CODE;
    public $CARD_TYPE;
    public $CARD_DATA_DATE;
    public $CARD_SOURCE;
    public $CREATE_DATE;
    public $REMARK;

    // constructor with $db as database connection
    public function __construct($db) {
        $this->conn = $db;
    }
    // read all cards
    function read() {

        // select all query
        $query = 'SELECT EMPLOYEE_ID, EMPLOYEE_NO, EMPLOYEE_CNAME, PINHOLE_PLOTTER_CODE, CARD_TYPE, CARD_DATA_DATE, CARD_SOURCE, CREATE_DATE, REMARK
        FROM vwZZ_CARD_DATA
        WHERE EMPLOYEE_NO = :EMPLOYEE_NO';
 
        // prepare query statement
        $stmt = $this->conn->prepare($query);

        // execute query
        $stmt->execute(array(
            ':EMPLOYEE_NO' => 'T108094'
        ));

        return $stmt;
    }
}