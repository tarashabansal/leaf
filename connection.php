<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="leaf";

	$conn=mysqli_connect($servername,$username,$password,$dbname);

	if($conn)
	{

	}
	else
	{
		echo "Connection Failed";
	}
?>