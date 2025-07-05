
<?php
include_once "conn.php";

$id=$_GET['id']; 
$sql="SELECT * FROM employee where id =$id";
$result=$con->query($sql);
$data=$result->fetch_assoc();



?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Employee Form</title>
  <link rel="stylesheet" href="style.css">   
</head>
<body>

<div class="form-container">
  <h2>Update Employee</h2>
  <form action="deleteoperation.php ?id=<?= $id ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" required>

    <label for="age">Age:</label>
    <input type="number" name="age" required>

    <label for="salary">Salary:</label>
    <input type="number" name="salary" required>

    <button type="submit">Submit</button>
  </form>
</div>


</body>
</html>
