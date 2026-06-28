<?php
$conn = mysqli_connect("localhost","root","","student_db");
?>

<!DOCTYPE html>
<html>
<head>
<title>Enroll Student</title>

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

select {
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

<h2>Enroll Student</h2>

<a href="index.php">Home</a><br><br>

<form action="insertEnroll.php" method="post">

<select name="student_id">
<?php
$s = mysqli_query($conn,"SELECT * FROM student");
while($row = mysqli_fetch_assoc($s)){
    echo "<option value='".$row['student_id']."'>".$row['name']."</option>";
}
?>
</select>

<select name="course_id">
<?php
$c = mysqli_query($conn,"SELECT * FROM course");
while($row = mysqli_fetch_assoc($c)){
    echo "<option value='".$row['course_id']."'>".$row['course_name']."</option>";
}
?>
</select>

<br>

<button type="submit">Enroll</button>

</form>

</div>

</body>
</html>