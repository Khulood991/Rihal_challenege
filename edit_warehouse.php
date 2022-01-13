<?php
	include('connection.php');

	$ids = $_GET['warehouse_id'];

	$manager  = $_POST['manager'];
	$warehouse_name  = $_POST['warehouse_name'];
	$phone  = $_POST['phone'];

	// echo "<pre>";
	// print_r($_POST);
	// exit();
	$update = $connection->query("UPDATE students SET name = '$warehouse_name', country_id='$manager', 	date_of_birth='$phone' WHERE id = '$ids'");
	header('location:index.php');
?>
