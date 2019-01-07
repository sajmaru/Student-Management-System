<?php
error_reporting(E_ERROR | E_PARSE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "Server issue";
    exit();
}
else{
    //
}
?>