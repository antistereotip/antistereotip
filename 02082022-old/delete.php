<?php
die('Medvedima pristup zabranjen !!!');
require_once("db.php");
$pdo_statement=$pdo_conn->prepare("delete from posts where id=" . $_GET['id']);
$pdo_statement->execute();
header('Location: index.php');
?>