<!DOCTYPE html>
<?php
	require 'conn.php';
	session_start();
	
	if(!ISSET($_SESSION['user'])){
		header('location:index.php');
	}
?>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<style>
		img {
		    border: 1px solid black;
		}
table, th, td {
  border: 1px solid black;
  padding: 10px;
}
th {
    background: #999;
}
.logout {
    padding: 10px;
    border: 1px solid black;
    float: left;
}
</style>
	</head>
<body>
	<nav class="navbar navbar-default">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Antistereotp; Porez na donaciju: 2%; Odbitak od ukupne zarade: 10%;</a>
	</div>
	</nav>
	<div class="col-md-6"></div>
	<div class="col-md-12 well">
		<h3 class="text-primary">OKLOP</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-3"></div>
		<div class="col-md-12">
			<h3>Cyber Caffee</h3>
			<img src="oklop.jpg" width="500"/>
			
			<br />
			<?php
				$id = $_SESSION['user'];
				$sql = $conn->prepare("SELECT * FROM `member` WHERE `mem_id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();
			?>
			<h4>Dobrodošao: <?php echo $fetch['firstname']." ". $fetch['lastname']?></h4>
			<br />
<table>
  <tr>
    <th>Subjekt</th>
    <th>Tvoj Saldo</th>
    <th>Odbitak za firmu</th>
    <th>Učešće u projektu</th>
    <th>Napomena</th>
    <th>Ostalo</th>
  </tr>
  <tr>
    <td>Zarada:</td>
    <td>200 evra</td>
    <td>20 evra</td>
    <td>1 %</td>
    <td>Napomena</td>
    <td>Ostalo</td>
  </tr>
  <tr>
    <td>Bonus:</td>
    <td>100 evra</td>
    <td>10 evra</td>
    <td>1 %</td>
    <td>Napomena</td>
    <td>Ostalo</td>
  </tr>
</table>
<br />
<br />
<p class="logout"><a href = "logout.php">Logout</a></p>

</div>
</div>
</body>
</html>