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
$user = "antister_ng1np";
$password = "loginordie124";
 	 
try {
	#-- konekcija na bazu --#
	$connection= new PDO("mysql:host=$server;dbname=antister_ng1np", $user, $password);
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
	#-- $query = 'SELECT unique_name, category, short_desc FROM ng1np ORDER BY unique_name'; --#
	$query = 'SELECT unique_name FROM ng1np ORDER BY unique_name';
	echo 'Result: ';
	foreach ($connection->query($query) as $record) {
		echo '<a href="./ng1np-baza.php?q='.$record[unique_name].'">'.$record[unique_name].'</a>'."\t";
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

<!--
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 43
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant unique_name - assumed 'unique_name' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 58
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant category - assumed 'category' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 59
[18-Feb-2022 07:06:22 UTC] PHP Warning:  Use of undefined constant short_desc - assumed 'short_desc' (this will throw an Error in a future version of PHP) in /home/antister/public_html/ng1np-baza.php on line 60
-->





