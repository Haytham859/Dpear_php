
<?php
include_once "conn.php";

$id=$_GET['id']; 
$sql="DELETE FROM employee where id=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("i",$id);
$stmt->execute();
header("Location: deleteview.php");




?>




