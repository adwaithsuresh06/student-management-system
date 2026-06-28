<?php

$conn = mysqli_connect("localhost","root","","student_db");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$dept_id = $_POST['dept_id'];

$sql = "UPDATE student 
SET name='$name', email='$email', phone='$phone', dept_id='$dept_id'
WHERE student_id=$id";

if(mysqli_query($conn,$sql)){
    header("Location: viewStudents.php");
}
?>