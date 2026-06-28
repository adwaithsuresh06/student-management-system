<?php
$conn = mysqli_connect("localhost","root","","student_db");
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Teacher</title>

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

input, select {
    width: 80%;
    padding: 10px;
    margin: 10px;
}

button {
    padding: 10px 20px;
    background-color: purple;
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

<h2>Add Teacher</h2>

<a href="index.php">Home</a><br><br>

<form action="insertTeacher.php" method="post">

<input type="text" name="name" placeholder="Enter Teacher Name"><br>

<select name="dept_id">
<?php
$result = mysqli_query($conn,"SELECT * FROM department");
while($row = mysqli_fetch_assoc($result)){
    echo "<option value='".$row['dept_id']."'>".$row['dept_name']."</option>";
}
?>
</select>

<br>

<button type="submit">Add Teacher</button>

</form>

</div>

</body>
</html>