<!DOCTYPE html><html>
<head>
<title>Engine UP</title>
<style>
body{background:#111;color:#17f117;}
a{color:yellow;}
a:hover{color:orangered;}
.active {color: orange;}
</style>
</head>
<body>

<!-- php -->
<?php
#-- die('access denied'); --#
#-- base: unique_name, category, short_desc --#
$server = "localhost"; 
$user = "user";
$password = "pass";
 	 
try {
	#-- konekcija na bazu --#
	$connection= new PDO("mysql:host=$server;dbname=ime_baze", $user, $password);
	#-- setuj PDO error - gresni :) mode --#
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "<p>Enter unique command</p>";
}
 	
catch(PDOException $error) {
 	echo "Connection Success: ".$error->getMessage();
}
        
l1st($connection);
echo '<hr/>';

#--- ova funkcija lista unikatno ime, kategoriju  i kratak opis iz tabele ng1np ---#
	
function l1st($connection) {
	#-- $query = 'SELECT unique_name, category, short_desc FROM tabela ORDER BY unique_name'; --#
	$query = 'SELECT unique_name FROM ng1np ORDER BY unique_name';
	echo 'Result: ';
	foreach ($connection->query($query) as $record) {
		echo '<a href="./baza.php?q='.$record[unique_name].'">'.$record[unique_name].'</a>'."\t";
		#-- print $record['category'] . "\t"; --#
		#-- print $record['short_desc'] . "\n<br>"; --#
	}
}
		
echo '<form id="searchbox" action="" method="GET">
<input id="search" type="text" placeholder="Input" name="q">
<input id="submit" type="submit" value="Search">
</form><br>';
	
$query = $connection->prepare("SELECT * FROM ng1np WHERE unique_name = ?");
	
if ($query->execute(array($_GET['q']))) {
	while ($record = $query->fetch()) {
	    echo 'Unique result: '.$record[unique_name].'<br>';
	    echo 'Category: '.$record[category].'<br>';
	    echo 'Short Description: '.$record[short_desc].'<br>';
	} 
} 
?>

<!-- end php -->

</body>
</html>




