<?php
include_once "conn.php";
$id=$_GET['id'];
$sql="UPDATE employee SET name =? , age=? , salary = ? where id=$id";
$stmt=$con->prepare($sql);
$stmt->bind_param("sid",$name,$age,$salary);
$name=$_POST['name'];
$age=$_POST['age'];
$salary=$_POST['salary'];
$stmt->execute();
header("Location: updateview.php");










?>