<?php
$db = mysqli_connect("localhost", "root", "", "aska") or die($db);
mysqli_set_charset($db, "utf8");

// Selektuj sve rezultate
$sql = "SELECT id, naslov, tekst FROM posts";
$result = $db->query($sql);
// Ukoliko je rezultat u kolonama veci od nule, izvrsi while petlju
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	// Priokazi elemente
    echo "id: " . $row["id"]. " - Name: " . $row["naslov"]. " " . $row["tekst"]. "<br>";
  }
} else {
  // Vrati nulu
  echo "0 results";
}
// Zatvori konekciju
$db->close();
?>