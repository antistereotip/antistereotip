<?php
require_once("db.php");
?>
<html>
<head>
<title>PHP PDO CRUD</title>
<style>
body{width:1024px;font-family:arial;letter-spacing:1px;line-height:20px;margin: 0 auto;}
.tbl-qa{width: 100%;font-size:0.9em;background-color: #f5f5f5;}
.tbl-qa th.table-header {padding: 5px;text-align: left;padding:10px;}
.tbl-qa .table-row td {padding:10px;background-color: #FDFDFD;vertical-align:top;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
</style>
</head>
<body>
<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
	
?>

<table class="tbl-qa">
  
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["post_title"]; ?></td>
		<td><?php echo $row["sum"]; ?></td>
		<td><?php echo $row["description"]; ?></td>
		<td><img src='<?php echo $row["img"]; ?>' width='150' height='150'></td>
		<td><?php echo $row["link"]; ?></td>
		<td><?php echo $row["post_at"]; ?></td>
		
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
</body>
</html>





