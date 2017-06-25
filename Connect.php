<?php
		$host="localhost";
		$uname="root";
		$pwd="";
		$dbname="php";

$conn=mysqli_connect($host,$uname,$pwd,$dbname);
if($conn){
	
	echo"successfully connected";
}
else{
	echo"Error";
}




?>

