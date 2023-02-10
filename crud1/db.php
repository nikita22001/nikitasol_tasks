<?php
$servername = "db";
$username = "event1";
$password = "event1";
$dbname = "event1";

//creating connection
$conn =  new mysqli($servername,$username,$password,$dbname);

//check the connection

if ($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}

?>