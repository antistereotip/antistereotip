<?php
require_once('__db.php');
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<b>Naslov:</b> <?php echo $result[0]['post_title']; ?>
<b>Ukratko:</b> <?php echo $result[0]['sum']; ?>
<b>Opis:</b> <?php echo $result[0]['description']; ?>
