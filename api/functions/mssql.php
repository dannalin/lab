<?php
// 主機位址
$host = '10.227.24.78';
// PORT
$port = '1433';
// 資料庫名稱
$dbname = '04196414';
// 帳號
$user = 'ehrview';
// 密碼
$passwd = 'viewehr';

$dbConn = new PDO(
    "sqlsrv:server=$host,$port;Database=$dbname",
    $user,
    $passwd
);

$sql = 'SELECT EMPLOYEE_ID, EMPLOYEE_NO, EMPLOYEE_CNAME, PINHOLE_PLOTTER_CODE, CARD_TYPE, CARD_DATA_DATE, CARD_SOURCE, CREATE_DATE, REMARK
        FROM vwZZ_CARD_DATA
        WHERE EMPLOYEE_NO = :EMPLOYEE_NO';

$stmt = $dbConn->prepare($sql);
$stmt->execute(array(
    ':EMPLOYEE_NO' => 'T108094'
));
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
var_dump($row);
echo '</pre>';