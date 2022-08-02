<?php
 
require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Third - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Third</p>
<p>This is another secured page.</p>
<p><a href="index.php">Home</a></p>
<p><a href="third.php">Thirtd</a></p>
<a href="logout.php">Logout</a>


<br /><br /><br /><br />
</div>
</body>
</html>
