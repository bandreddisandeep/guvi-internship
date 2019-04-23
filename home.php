<html>
<body>
<link rel="stylesheet" href="1.css" type="text/css">
<?php
include('server.php');
$userprofile = $_SESSION['reg'];
	if($userprofile==true)
	{

	}

	else{
		header('location:login.php');
	}

$rollno=$_SESSION['rollno'];

$que=mysqli_query($db,"select * from project where rollno='$rollno' ");
while($row=mysqli_fetch_array($que))
{
	echo"NAME:". $row['username'] ."<br>";
	echo "DEPARTMENT:".$row['dept'] ."<br>";
	echo "YEAR:".$row['year'] ."<br>";
		echo "ROLL NO:".$row['rollno'] ."<br>";

}
?>
<p>
						  <a href="server.php?logout='1'">Logout</a>
					</p>
					</body>
</html>