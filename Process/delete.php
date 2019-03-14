<?php

$con = mysqli_connect("localhost","root","","student_info");
$_POST=json_decode(file_get_contents('php://input'),true);
$uname1 = $_POST['uname'];
$qry ="DELETE FROM `student_detail` WHERE `uname`='$uname1'";
$run = mysqli_query($con,$qry);




?>