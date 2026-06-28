<?php
$conn = mysqli_connect("localhost","root","","student_db");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM student WHERE student_id = $id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>

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
    background-color: orange;
    color: white;
    border: none;
    border-radius: 5px;
}

a {
    text-decoration: none;
    background: green;
    color: white;
    padding: 10px;
    border-radius: 5px;
}
</style>

</head>

<body>

<div class="box">

<h2>Edit Student</h2>

<a href="index.php">Home</a><br><br>

<form action="updateStudent.php" method="post">

<input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">

<input type="text" name="name" value="<?php echo $row['name']; ?>"><br>

<input type="text" name="email" value="<?php echo $row['email']; ?>"><br>

<input type="text" name="phone" value="<?php echo $row['phone']; ?>"><br>

<input type="text" name="dept_id" value="<?php echo $row['dept_id']; ?>"><br>

<button type="submit">Update</button>

</form>

</div>

</body>
</html>