<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

// include database and object files
include_once '../config/database.php';
include_once '../objects/functions.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare functions object
$functions = new Functions($db);

// set ID property of record to read
$functions->id = isset($_GET['id']) ? $_GET['id'] :　die();

// read the details of product to be edited
$stmt = $functions->readOne();

if ($stmt->rowCount() > 0) {
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $functions_arr = array(
        "id" =>  $row['id'],
        "function_name" => $row['function_name'],
    );

    // set response code - 200 OK
    http_response_code(200);

    // make it json format
    echo json_encode($functions_arr);
} else {
    // set response code - 404 Not found
    http_response_code(404);

    // tell the user function does not exist
    echo json_encode(array("message" => "function does not exist."));
}
