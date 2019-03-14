<?php

$con = mysqli_connect("localhost","root","","student_info");
$data = array();
$query = "select * from student_detail";
$run = mysqli_query($con,$query);
while($item = mysqli_fetch_assoc($run))
{

	$data[]=$item;

}
echo $json_response = json_encode($data);







?>