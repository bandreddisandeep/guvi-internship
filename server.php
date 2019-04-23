
<?php
session_start();
$db=mysqli_connect('localhost','root','','sandeep');
if(isset($_POST['login']))
{

$rollno= $_POST['rollno'];
$password= $_POST['password'];
$_SESSION['rollno']=$rollno;
if(empty($rollno)){	
	 	echo "<script>alert('enter rollno')</script>";
	 	header('location:login.php');


}
elseif (empty($password)) {
		echo "<script>alert('enter password')</script>";
		header('location:login.php');



}
else{
$qu=mysqli_query($db,"select * from project where rollno='$rollno' and password='$password'");
$num=mysqli_num_rows($qu);
if($num!=0){
	$_SESSION['reg'] = $rollno;
 	header('location:home.php');

}else{
	echo "<script>alert('invalid details')</script>";
	header('location:login.php');


}

}


}
if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['regno']);
		header("location: login.php");
	}


?>

