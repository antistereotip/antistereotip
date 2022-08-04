<?php
require_once("db.php");
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
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
<link rel="stylesheet" media="screen and (max-width: 600px)" href="mobilni.css">
<link rel="stylesheet" media="screen and (max-width: 400px)" href="mobilni400.css">
</head>
<body>
<header>

</header>

<article>
	<div class="print">
		<p class="one"><button onclick="window.location='index.php';">Vrati se na početnu stranu</button></p>
		<p class="two"><button onclick="window.print()">Odštampaj stranicu</button></p>
	</div>

	<div class="img">
		<p><img src="<?php echo $result[0]['img']; ?>" width="200"/></p>
	</div>
	
	<div class="sum">
		<h2><?php echo $result[0]['post_title']; ?></h2><br />
		<h4><?php echo $result[0]['sum']; ?></h4>
	</div>
	
	<div class="desc">
		<p><?php echo $result[0]['description']; ?></p>
	</div>	
	
	<div class="link">
		<p><a href='<?php echo $result[0]['link']; ?>'><?php echo $result[0]['link']; ?></a></p>
		<p><?php echo $result[0]['post_at']; ?></p>
	</div>
	
</article>

</body>
</html>