<?php
require_once("db.php");
$data = $pdo_conn->query('SELECT link FROM posts')->fetchAll(PDO::FETCH_ASSOC);
var_export($data);
echo '<br/>';
$sve = $pdo_conn->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_UNIQUE);
var_export($sve);
?>