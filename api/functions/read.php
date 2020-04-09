<?php
// include database and object files
include_once '../config/database.php';
include_once '../objects/functions.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare doctor object
$functions = new Functions($db);

// query functions
$stmt = $functions->read();
$num = $stmt->rowCount();
// check if more than 0 record found
if($num>0){
    // functions array
    $functions_arr=array();
    $functions_arr["functions"]=array();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $functions_item=array(
            "function_name" => $function_name,
        );
        array_push($functions_arr["functions"], $functions_item);
    }

    echo json_encode($functions_arr["functions"]);
} else {
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user no functions found
    echo json_encode(
        array("message" => "No functions found.")
    );
}