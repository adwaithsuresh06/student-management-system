<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>

<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f6f9;
    margin: 0;
}

.header {
    background-color: #2c3e50;
    color: white;
    padding: 20px;
    text-align: center;
}

.container {
    margin: 40px auto;
    width: 60%;
    text-align: center;
}

.card {
    background: white;
    padding: 30px;
    margin: 15px;
    display: inline-block;
    width: 200px;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

.card a {
    text-decoration: none;
    color: #2c3e50;
    font-weight: bold;
}

.card:hover {
    transform: scale(1.05);
}
</style>

</head>

<body>

<div class="header">
    <h1>Student Management System</h1>
</div>

<div class="container">

<div class="card">
    <a href="addStudent.php">Add Student</a>
</div>

<div class="card">
    <a href="addTeacher.php">Add Teacher</a>
</div>

<div class="card">
    <a href="enroll.php">Enroll Student</a>
</div>

<div class="card">
    <a href="viewStudents.php">View Students</a>
</div>

<div class="card">
    <a href="viewTeachers.php">View Teachers</a>
</div>

<div class="card">
    <a href="viewEnroll.php">View Enrollments</a>
</div>

</div>

</body>
</html>