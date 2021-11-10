<?php  
	$db = mysqli_connect('localhost' , 'root' , '' , 'hotel-form');

	$nm = $_POST['customer_name'];
	$em = $_POST['email'];
	$ds = $_POST['messege'];

	$send = mysqli_query($db , "INSERT INTO ht_form (name , email , description) VALUES ('$nm' , '$em' , '$ds')");
?>