<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
header('Access-Control-Allow-Headers: X-Requested-With, Content-Type, Accept');

// include database and object files
include_once '../config/database.php';
include_once '../objects/functions.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

$rows = array();
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
$row = [
    "title" => "員工出缺勤異常單 ",
    "createDate" => "2020/4/15",
    "url" => "http://10.227.1.10/modules.php?name=Downloads&d_op=getit&lid=9"
];  
array_push($rows, $row);
echo json_encode(
    array(
        "total" => 1,
        "totalNotFiltered" => 1,
        "rows" => $rows
    )
);
