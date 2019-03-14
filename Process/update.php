<?php
$con = mysqli_connect("localhost","root","","student_info");
$_POST=json_decode(file_get_contents('php://input'),true);
$user_name = $_POST['uname'];

$mail = $_POST['email'];

$fulname = $_POST['fname'];

$pass = $_POST['pass'];
$gen = $_POST['gender'];
$cont = $_POST['cnumber'];
$qry = "UPDATE `student_detail` SET `uname`='$user_name',`email`='$mail',`pass`='$pass',`fname`='$fulname',`gender`='$gen',`cnumber`='$cont' WHERE `uname`='$user_name'";
$run = mysqli_query($con,$qry);




?>