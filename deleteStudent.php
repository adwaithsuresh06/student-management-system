<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "student_db";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed");
}

$id = $_GET['id'];

$sql = "DELETE FROM student WHERE student_id = $id";

if(mysqli_query($conn, $sql)){
    header("Location: viewStudents.php");
}
?>