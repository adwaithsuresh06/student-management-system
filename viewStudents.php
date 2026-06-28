<?php
$conn = mysqli_connect("localhost","root","","student_db");

$result = mysqli_query($conn, "
SELECT student.*, department.dept_name 
FROM student 
JOIN department 
ON student.dept_id = department.dept_id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>

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
    width: 80%;
    background: white;
    box-shadow: 0px 0px 10px gray;
}

th {
    background-color: #007bff;
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
    padding: 5px 10px;
    border-radius: 5px;
}

a[href*="edit"] {
    background-color: orange;
    color: white;
}

a[href*="delete"] {
    background-color: red;
    color: white;
}
</style>

</head>

<body>

<h2>Student Management System</h2>

<br>
<a href="index.php" style="background:green;color:white;padding:10px;border-radius:5px;">Home</a>
<br><br>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Department</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['student_id']."</td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['phone']."</td>";
    echo "<td>".$row['dept_name']."</td>";
    echo "<td>
    <a href='editStudent.php?id=".$row['student_id']."'>Edit</a> 
    <a href='deleteStudent.php?id=".$row['student_id']."'>Delete</a>
    </td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>