<?php
$DB_HOST = "srv1526.hstgr.io";
$DB_PORT = "3306";
$DB_NAME = "u878257056_restaurante";
$DB_USER = "u878257056_dylan";
$DB_PASSWORD = "4KHtmaRtr&Z";

try {
    $conexion = new PDO("mysql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
} catch (Exception $error) {
    echo $error->getMessage();
}
