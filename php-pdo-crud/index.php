<?php
header('Location: pregled.php');
require_once("db.php");
?>
<html>
<head>

<title>PHP PDO CRUD</title>
<meta charset="utf-8">
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
<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Create</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Title</th>
	  <th class="table-header" width="20%">Sum</th>
	  <th class="table-header" width="40%">Description</th>
	  <th class="table-header" width="40%">Img</th>
	  <th class="table-header" width="40%">Link</th>
	  <th class="table-header" width="20%">Date</th>
	  <th class="table-header" width="5%">Actions</th>
	</tr>
  </thead>
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
		<td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'>
		<img src="crud-icon/edit.png" title="Edit" /></a> 
		<a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'>
		<img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
</body>
</html>