<?php
$conn = mysqli_connect("localhost","root","","student_db");

$result = mysqli_query($conn, "
SELECT student.name AS student_name, course.course_name 
FROM enrollment
JOIN student ON enrollment.student_id = student.student_id
JOIN course ON enrollment.course_id = course.course_id
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enrollment List</title>

<style>
body {
    font-family: Arial;
    text-align: center;
    background-color: #f4f6f9;
}

table {
    margin: auto;
    border-collapse: collapse;
    width: 60%;
    background: white;
}

th {
    background-color: #28a745;
    color: white;
    padding: 10px;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}
</style>

</head>

<body>

<h2>Enrolled Students</h2>

<br>
<a href="index.php" style="background:green;color:white;padding:10px;border-radius:5px;">Home</a>
<br><br>

<table>

<tr>
<th>Student Name</th>
<th>Course Name</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$row['student_name']."</td>";
    echo "<td>".$row['course_name']."</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>