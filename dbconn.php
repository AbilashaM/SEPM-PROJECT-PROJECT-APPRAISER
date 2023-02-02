<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "details";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {

    echo "Connection failed!";
}
else{
    echo "Connection established";
}
?>