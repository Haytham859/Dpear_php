<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Table</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Upadte</th>
        </tr>
    </thead>
    <tbody>
        <?php
        require_once "conn.php";

        $sql = "SELECT id,name, age, salary FROM employee";
        $result = $con->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['age']) . "</td>";
            echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
            echo '<td><a href="updateoperationview.php?id=' . $row['id'] . '"><button>Update</button></a></td>';

            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
