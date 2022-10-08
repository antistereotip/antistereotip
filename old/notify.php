<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="google-site-verification" content="WgSTITldChv0UTsrjW1NZfWeid4lDgyh_6E6KQZ0HpY" />
	<title>ASKA DECIJE IGRAONICE</title>
</head>
<body>

<?php
$datum = round(microtime(true) * 1000);
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p style='text-align: center; padding-top: 20%; font-size: 1.5em;'>
	E-adresa ".$email." je validna. <br />Bićete obavešteni o novinama.<br /> 
	Vratite se na <a href='https://opremazaigraonice.rs/' style='color: #5fdab2;'>početnu stranu</a>.</p>";
} else {
	echo "<p style='text-align: center; padding-top: 20%; font-size: 1.5em;'>
	E-adersa ".$email." <span style='color: orangered;'>NIJE</span> validna. <br />
	Vratite se na <a href='https://opremazaigraonice.rs/' style='color: #5fdab2;'>početnu stranu</a>.</p>";
	return 0;
}
$podaci = array($datum, $email);
file_put_contents('../email.txt', implode(' || ',$podaci)."\n",FILE_APPEND | LOCK_EX);




$poruka = 'Posetite nas na instagramu - @igraoniceaska';
// Posalji email na unetu adresu
mail($email, "Automatska poruka", $poruka);


// Poruka
$porukameni = "Neko sa e-adresom ".$email." se upravo prijavio za obaveštenja.";

// Posalji email na admin adresu
mail("igraoniceaska@gmail.com", "Automatska poruka adminu ", $porukameni);

?>

</body>
</html>