<?php
require_once "conn.php";
require_once "Model_user.php";

$sql="INSERT INTO employee(name,age,salary) values ('mostafa hossam',16,25555)";

if($con->query($sql))
{
    echo "record added";
}

$sqlselect="SELECT name , age,salary from employee";
$result=$con->query($sqlselect);



?>