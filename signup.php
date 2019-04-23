<?php
$db=mysqli_connect('localhost','root','','sandeep');
$username=$_POST['username'];
$rollno=$_POST['rollno'];
$password=$_POST['password'];
$dept=$_POST['dept'];
$year=$_POST['year'];

if(empty($username)){ echo "enter username" ;}
else{
	$q=mysqli_query($db,"select * from project where rollno = '$rollno' ");
	$num =mysqli_num_rows($q);
	if($num>0){
		echo "user already exists";
	}
	else{
		$que="INSERT INTO project (username,rollno,dept,year,password) VALUES ('$username','$rollno','$dept','$year','$password')";
		mysqli_query($db,$que);
		if(file_exists('sandeep.json'))
		{
			$data = file_get_contents('sandeep.json');
			$a= json_decode($data,true);
			$b= array('name' => $username,
						'rollno' => $rollno,
						'password' => $password,
						'dept' => $dept,
						'year' => $year );
			$a[]=$b;
			$final=json_encode($a);
			file_put_contents('sandeep.json', $final);
		}
		echo "success";
	}
}


?>