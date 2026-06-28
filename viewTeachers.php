<?php
$conn = mysqli_connect("localhost","root","","student_db");

$result = mysqli_query($conn, "
SELECT teacher.*, department.dept_name
FROM teacher
JOIN department
ON teacher.dept_id = department.dept_id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teacher List</title>

<style>
body {
    font-family: Arial;
    background-color: #f4f6f9;
    text-align: center;
}

h2 {
    margin-top: 20px;
}

table {
    margin: auto;
    border-collapse: collapse;
    width: 60%;
    background: white;
    box-shadow: 0px 0px 10px gray;
}

th {
    background-color: #6f42c1; /* purple */
    color: white;
    padding: 10px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

tr:hover {
    background-color: #f1f1f1;
}

a {
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 5px;
    background-color: green;
    color: white;
}
</style>

</head>

<body>

<h2>Teacher Management</h2>

<br>
<a href="index.php">Home</a>
<br><br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Department</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['teacher_id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['dept_name']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>