<?php
#---nema direktnog dodaj sekciji---#
//defined('ROOT_DIR') or exit('No direct script access allowed');
?>

<form method="post" action="">
          <div>
            <div>
              <input type="text" placeholder="Unesi email adresu" name="email">
            </div>
	    <div class="col-auto">
		<textarea id="tekst" name="tekst" rows="4" cols="50" placeholder="Unesi sadrzaj"></textarea>
            </div
            <div>
              <button type="submit" id="submit" name="submit">Dodaj</button>
            </div>
          </div>
        </form>
<?php
if (isset($_POST['submit'])) {
	$datum = round(microtime(true) * 1000);
	$email = $_POST["email"];
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    		echo "valid";
		} else {
		echo "not valid";
		return 0;
	}
	$tekst = $_POST["tekst"];

	$podaci = array('<date>' . $datum . '</date>', '<h2>' .  $email . '</h2>', '<p>' .  $tekst . '</p>');
	file_put_contents('data.txt', implode('',$podaci)."\n",FILE_APPEND | LOCK_EX);
}
?>
