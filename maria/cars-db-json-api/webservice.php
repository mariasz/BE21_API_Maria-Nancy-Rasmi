<?php

header("Content-Type:application/json");

require_once("db_check.php");

// delivering a JSON response
$response['cars'] = $cars;
$json_response=json_encode($response);

// alternativ option instead of line 8 & 9:
// $json_response=json_encode($cars);

echo $json_response;
