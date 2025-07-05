<?php
$host="localhost";
$user="root";
$pass="";
$dbname="DP";

$con=new mysqli($host,$user,$pass,$dbname);

if(!$con)
{
    echo"filed".con->connect_error;
    exit;
}


?>