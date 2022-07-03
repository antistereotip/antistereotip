<?php

$server = "localhost";
$korisnik = "root";
$lozinka = "";

try {
  $konekcija = new PDO("mysql:host=$server;dbname=aska", $korisnik, $lozinka);
  // setuj PDO gresni mod za izuzetak
  $konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "<span style='color: lightgreen'>Konekcija uspela</span><br />";
} catch(PDOException $e) {
  echo "<span style='color: orangered'>Konekcija neuspela:</span><br /> " . $e->getMessage();
}

$izraz = $konekcija->query("SELECT * FROM posts");
while ($kolona = $izraz->fetch()) {
    echo "<p style='color: red;';>" . $kolona['naslov']."</p>";
	echo "<p style='color: blue;';>" . $kolona['tekst']."</p>\n";
}

?>