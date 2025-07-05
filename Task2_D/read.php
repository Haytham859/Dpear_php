<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"> <!-- تأكد أن هذا الملف موجود -->
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
        </tr>
    </thead>
    <tbody>
        <?php
        require_once "conn.php";

        $sql = "SELECT name, age, salary FROM employee";
        $result = $con->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['age']) . "</td>";
            echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
