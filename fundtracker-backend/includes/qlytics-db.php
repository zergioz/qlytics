<?php 
/**
 Initiate data base connection. $conn will be used across the application to connect to MySQL 
**/
class DBi {
    public static $conn;
}
DBi::$conn = new mysqli(_DB_HOSTNAME, _DB_USERNAME, _DB_PASSWORD, _DB_NAME);
?>