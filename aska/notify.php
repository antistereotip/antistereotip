<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@antistereotip" />
  <meta name="twitter:title" content="Nova Kripto Valuta?" />
  <meta name="twitter:description" content="Nova Kripto Valuta? Detaljan opis" />
  <meta name="twitter:image" content="https://usk.rs/EGGY/egg.png" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<meta name="google-site-verification" content="WgSTITldChv0UTsrjW1NZfWeid4lDgyh_6E6KQZ0HpY" />
	<title>УСКРС</title>
<link rel="icon" href="favicon.png" type="image/x-icon"/>
</head>
<body>

<?php
$datum = round(microtime(true) * 1000);
$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p style='text-align: center; padding-top: 20%; font-size: 1.5em;'>
	E-mail address ".$email." is valid. <br />You will be notified of the newspaper.<br /> 
	Back to <a href='https://indoor-playgrounds.biz/' style='color: #5fdab2;'>home page</a></p>";
} else {
	echo "<p style='text-align: center; padding-top: 20%; font-size: 1.5em;'>
	E-mail ".$email." <span style='color: orangered;'>IS NOT</span> valid. <br />
	Back to <a href='https://indoor-playgrounds.biz/' style='color: #5fdab2;'>home page</a></p>";
	return 0;
}
$podaci = array($datum, $email);
file_put_contents('../secured/email.txt', implode(' || ',$podaci)."\n",FILE_APPEND | LOCK_EX);


// Poruka
$poruka = "You will be notified in a timely manner of all newspapers. Sincerely. Admin.";

// Posalji email na unetu adresu
mail($email, "Automatic message", $poruka);


// Poruka
$porukameni = "Someone with an email address ".$email." just signed up for notifications.";

// Posalji email na admin adresu
mail("milutingavrilovic@gmail.com", "Automatic message to admin", $porukameni);

?>

</body>
</html>
