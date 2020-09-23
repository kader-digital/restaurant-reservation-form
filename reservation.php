<?php

	$name = $_POST['fullname'];
	$phone = $_POST['tel'];
	$date = $_POST['date'];
	$size = $_POST['size'];
	$time = $_POST['time'];

	$link = new mysqli ('localhost', 'root', 'kader', 'reservations');

	if ($link->conn_error)
		die ("Could not connect to the database");

	else
		echo "connected to the database!";

	#make sure they didnt make two reservations

	$sql = "insert into reservations 
		(name, phone, date, size, time)
		values ('$name','$phone','$date','$size','$time')";	

	$response = $link->query($sql);

	if (!($response))
		die ("Could not submit reservation query");

	else
		echo "successfully submitted the reservation!";

	header("Location: index.html?success!");
		
		

?>
