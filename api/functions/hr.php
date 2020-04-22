<?php
// include database and object files
include_once '../config/database_sqlsrv.php';
include_once '../objects/card_data.php';

// get database connection
$database = new DatabaseSqlsrv();
$db = $database->getConnection();

// prepare doctor object
$cardData = new CardData($db);

// query cardData
$stmt = $cardData->read();

// check if more than 0 record found
if($stmt->fetchColumn() > 0){
    // card datas array
    $cardDatas_arr=array();
    $cardDatas_arr["cardDatas"]=array();

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $cardData_item=array(
            "EMPLOYEE_ID" => $EMPLOYEE_ID,
            "EMPLOYEE_NO" => $EMPLOYEE_NO,
            "EMPLOYEE_CNAME" => $EMPLOYEE_CNAME,
            "PINHOLE_PLOTTER_CODE" => $PINHOLE_PLOTTER_CODE,
            "CARD_TYPE" => $CARD_TYPE,
            "CARD_DATA_DATE" => $CARD_DATA_DATE,
            "CARD_SOURCE" => $CARD_SOURCE,
            "CREATE_DATE" => $CREATE_DATE,
            "REMARK" => $REMARK
        );
        array_push($cardDatas_arr["cardDatas"], $cardData_item);
    }
    echo json_encode($cardDatas_arr["cardDatas"]);
}
else{
    echo json_encode(array());
}