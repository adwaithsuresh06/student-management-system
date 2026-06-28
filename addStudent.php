<?php
$conn = mysqli_connect("localhost","root","","student_db");
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student</title>

<style>
body {
    font-family: Arial;
    background-color: #f4f6f9;
    text-align: center;
}

.box {
    margin: 50px auto;
    width: 40%;
    background: white;
    padding: 30px;
    box-shadow: 0px 0px 10px gray;
    border-radius: 10px;
}

input {
    width: 80%;
    padding: 10px;
    margin: 10px;
}

button {
    padding: 10px 20px;
    background-color: green;
    color: white;
    border: none;
    border-radius: 5px;
}

a {
    text-decoration: none;
    background: blue;
    color: white;
    padding: 10px;
    border-radius: 5px;
}
</style>

</head>

<body>

<div class="box">

<h2>Add Student</h2>

<a href="index.php">Home</a><br><br>

<form action="insertStudent.php" method="post">

<input type="text" name="name" placeholder="Enter Name"><br>

<input type="text" name="email" placeholder="Enter Email"><br>

<input type="text" name="phone" placeholder="Enter Phone"><br>

<input type="text" name="dept_id" placeholder="Enter Dept ID"><br>

<button type="submit">Add Student</button>

</form>

</div>

</body>
</html>