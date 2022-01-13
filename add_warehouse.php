<?php
	include('connection.php');
	session_start();

	$item = array(
			"name"=>$_POST['name'],
			"manager"=>$_POST['manager'],
			"address"=>$_POST['address'],
			"phone"=>$_POST['phone']
			);


		$warehouse = $connection->query("INSERT INTO students VALUES ('','".$item['address']."', '".$item['manager']."', '".$item['phone']."', '".$item['name']."')");
		echo json_encode($item, true);




?>
