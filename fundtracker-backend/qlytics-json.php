<?php
ini_set("display_errors", 1);

# start session
session_start();

#necessary files
include("qlytics-config.php");
include("includes/qlytics-db.php");


# update claim status base on results we will update or insert record
$db=DBi::$conn->query(" SELECT * FROM      `"._DB_NAME."`.`ExchangeTradedFund`");

# hold Mysql results to serve JSON call
$qlyticsJson  = array();

# quick way to json encode - issues with dev env  -create array and run json_encode 
$qlyticsJson=$db->fetch_all(MYSQLI_ASSOC);

#return JSON request
echo json_encode($qlyticsJson);

?>