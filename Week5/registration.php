<?php
session_start();

/* connect to database */
$con = mysqli_connect('localhost', 'root', '123456', 'loginreg'); 

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

/* create variables to store data */
$name = $_POST['user'];
$pass = $_POST['password'];
$student_id = $_POST['student_id'];
$dob = $_POST['dob'];
$country = $_POST['country'];

/* select data from DB */
$s = "SELECT * FROM userreg WHERE name='$name'";

/* result variable to store data */
$result = mysqli_query($con, $s);

/* check for duplicate names and count records */
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo "Username Exists";
} else {
    $reg = "INSERT INTO userreg(name,password,student_id,dob,country) 
            VALUES ('$name','$pass','$student_id','$dob','$country')";
    mysqli_query($con, $reg);
    echo "Registration successful";
}
?>
