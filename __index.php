<?php
require_once('__db.php');
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<script src="script.js"></script>
<link rel="stylesheet" href="stil.css">
</head>
<body>
<h1>Antistereotip</h1>
<?php
if(!empty($result)) { 
  foreach($result as $row) {
?>
<h2><?php echo $row["post_title"]; ?></h2>
<h4><?php echo $row["sum"]; ?></h4>
<p><?php echo substr($row["description"], 0, 256); ?>...</p>
<p><a href='view.php?id=<?php echo $row['id']; ?>'>
    <p>Detaljnije</p></a></p>
<p><img src='<?php echo $row["img"]; ?>' width='150' height='auto'/></p>
<p><a href='<?php echo $row["link"]; ?>'><?php echo $row["link"]; ?></a></p>
<p><?php echo $row["post_at"]; ?></p>
<?php
   }
}
?>
</body>
</html>
