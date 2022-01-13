<?php
	$connection = new mysqli('localhost', 'root', '', 'rihal');

	if(!$connection) {
		echo 'ERROR ON CONNECTING WITH DATABASE';
	}
?>
