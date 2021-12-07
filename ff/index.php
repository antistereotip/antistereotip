<?php
define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
?>

<html>
<body>

<form action="" method="post">
Korisnik: <input type="text" name="korisnik"><br>
Lozinka: <input type="text" name="lozinka"><br>
<input type="submit" name="submit">
</form>

</body>
</html>

<?php
$korisnik = $_POST['korisnik'];
$lozinka = $_POST['lozinka'];

if (isset($_POST['submit'])) {

	if ($korisnik =='admin' AND $lozinka=='admin') {
		header ('Location: dodaj.php');    		
	} else if ($korisnik =='admin2' AND $lozinka=='admin2') {
    		header ('Location: dodaj2.php');
	} else {
    		echo "Medvedima pristup zabranjen!";
	}
} 

