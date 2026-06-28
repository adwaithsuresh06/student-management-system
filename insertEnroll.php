<?php
$conn = mysqli_connect("localhost","root","","student_db");

$student_id = $_POST['student_id'];
$course_id = $_POST['course_id'];

$sql = "INSERT INTO enrollment(student_id,course_id)
VALUES('$student_id','$course_id')";

if(mysqli_query($conn,$sql)){
?>
<!DOCTYPE html>
<html>
<head>
<title>Success</title>

<style>
body {
    font-family: Arial;
    background-color: #f4f6f9;
    text-align: center;
}

.box {
    margin: 100px auto;
    width: 40%;
    background: white;
    padding: 30px;
    box-shadow: 0px 0px 10px gray;
    border-radius: 10px;
}

.success {
    color: green;
    font-size: 22px;
    margin-bottom: 20px;
}

a {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.home {
    background-color: green;
}

.add {
    background-color: orange;
}
</style>

</head>

<body>

<div class="box">

<div class="success">✅ Enrollment Successful</div>

<a href="index.php" class="home">Home</a>
<a href="enroll.php" class="add">Enroll Again</a>

</div>

</body>
</html>
<?php
}
?>