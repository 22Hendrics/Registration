<?php
	$fname=$_Post['lastname'];
	$lname=$_Post['firstname'];
	$accesslevel=$_Post['accesslevel'];
	$address=$_Post['address'];
	$password=$_Post['password'];
	$button=$_Post['save'];
	
	if($button=='Save!'){
		$dbhost='localhost';
		$dbuser='root';
		$dbpwrd='';
		$dbname='regdb';
			$conn=mysqli_connect($dbhost, $dbuser, $dbpwrd, $dbname)
				or die('MySql Connection Failed...' .mysqli_error());
			if(!$conn){
				die("Connection Failed:" .mysqli_error());
			}
			
			$sql="INSERT INTO users(lname, fname, accesslevel, address, password) VALUES($lname, $fname, $accesslevel, $address, $password)";
			mysqli_query($conn, $sql);
	}
?>
