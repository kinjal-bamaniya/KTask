<?php
include 'conn.php';
$name=$_POST['name'];
$address=$_POST['address'];
$gen=$_POST['gender'];
$city=$_POST['city'];
$lang=$_POST['lang'];
$langchk=implode(",",$lang);
 if($name==NULL || $address==NULL || $gen==NULL || $city==NULL )
	header('Location:registration.php?Plaease Enter all details.');
	else{
		$qry="insert into user (name,address,gender,city,lang) values('$name','$address','$gen','$city','$langchk')";
		$r=mysqli_query($conn,$qry);
		if($r)
			header('location:registration.php?sts=Account is created');
		    else{
			header('location:registration.php?err=Please try again');	
			}
	}
 ?>