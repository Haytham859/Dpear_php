<?php
require_once "conn.php";

$sql="INSERT INTO employee(name,age,salary) VALUES(?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param("sid",$name,$age,$salary);
$name=$_POST['name'];
$age=$_POST['age'];
$salary=$_POST['salary'];
$stmt->execute();
header("Location: read.php");
?>