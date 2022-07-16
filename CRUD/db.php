<?php
	$database_username = 'antister_oklop';
	$database_password = 'loginordie124';
	$pdo_conn = new PDO( 'mysql:host=localhost;dbname=antister_oklop', $database_username, $database_password );
	$pdo_conn->exec("set names utf8mb4");
?>