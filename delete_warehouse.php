<?php
	include('connection.php');

	$ids = $_POST['warehouse_id'];

	$delete = $connection->query("DELETE FROM students WHERE id = '$ids'");
?>
