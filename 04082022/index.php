<?php
require_once('db.php');
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="script.js"></script>
<link rel="stylesheet" href="stil.css">
<link rel="stylesheet" media="screen and (max-width: 800px)" href="mobilni800.css">
<link rel="stylesheet" media="screen and (max-width: 600px)" href="mobilni600.css">
<link rel="stylesheet" media="screen and (max-width: 400px)" href="mobilni400.css">

</head>
<body>
<header>
<h1>Antistereotip</h1>
<p><img src="img/logo.jpg" width="150"/></p>
<p>Udruženje građana za besplatnu informatičku edukaciju i društveno odgovorne projekte Antistereotip (u daljem tekstu: Udruženje) je dobrovoljno, 
nevladino i neprofitabilno, nestranačko udruženje, osnovano na neodređeno vreme radi ostvarivanja ciljeva u oblasti besplatne informatičke edukacije 
socijalno ugrožene omladine i dece, sprovođenja društveno odgovornih projekata, rada sa marginalizovanim grupama stanovništva i pomoći zavisnicima, 
kao i žrtvama trafiking-a.
</p>
<?php
    $query = $pdo_conn->query("SELECT * FROM posts");
    $count = $query->rowCount();
    echo "<br /><p style='font-size: 1.2em; color: orangered;'>" . "$count rezultata" . "</p>";
    ?><br />
<p><a href="add.php"><img src="crud-icon/add.jpg" width="32"></a></p>
</header>



<?php
if(!empty($result)) { 
  foreach($result as $row) {
?>
<article>


	<div class="img">
		<p><img src='<?php echo $row["img"]; ?>' width='150' height='auto'/></p>
	</div>
		

	<div class="sum">
	    
		<h2><a href='view.php?id=<?php echo $row['id']; ?>'><?php echo $row["post_title"]; ?></a></h2><br />
		<h4><?php echo $row["sum"]; ?></h4>
		<br/><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'>
		<img src="crud-icon/edit.jpg" width="30" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'>
		<img src="crud-icon/delete.jpg" width="30" title="Delete" /></a>
	</div>
	
	<div class="desc">
		<p><?php echo substr($row["description"], 0, 256); ?>...</p>
		<br />
		<p><button><a href='view.php?id=<?php echo $row['id']; ?>'>Detaljnije</a></button></p>
	</div>	
	
	<div class="link">
		<p><a href='<?php echo $row["link"]; ?>'><?php echo $row["link"]; ?></a></p>
		<p><?php echo $row["post_at"]; ?></p>
	</div>
	
</article>
<?php
   }
}
?>

<footer>


<p>Powered by Antistereotip &copy; 2012-<?php echo date("Y"); ?></p>

</footer>


</body>
</html>