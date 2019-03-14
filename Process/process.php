<?php
$con = mysqli_connect("localhost","root","","student_info");
$_POST=json_decode(file_get_contents('php://input'),true);
$user_name = $_POST['uname'];

$mail = $_POST['email'];

$fulname = $_POST['fname'];

$pass = $_POST['pass'];
$gen = $_POST['gender'];
$cont = $_POST['cnumber'];
$qry = "INSERT INTO `student_detail`(`uname`, `email`, `pass`, `fname`, `gender`, `cnumber`) VALUES ('$user_name','$mail','$pass','$fulname','$gen','$cont')";
echo $qry;
$run = mysqli_query($con,$qry);
$rows = mysqli_affected_rows($con);

if($run = true)
{

		?>

		<script type="text/javascript">
			alert('successfully inserted');
		</script>
		<?php
}
else{

	?>

		<script type="text/javascript">
			alert('Not successfully inserted');
		</script>
		<?php
}

echo $json_response = json_encode($rows);


?>
