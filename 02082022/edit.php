<?php
//die('Medvedima pristup zabranjen !!!');
require_once("db.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$pdo_conn->prepare("
	update posts set post_title='" . $_POST[ 'post_title' ] . "', 
	sum='" . $_POST[ 'sum' ]. "', 
	description='" . $_POST[ 'description' ]. "',
	img='" . $_POST[ 'img' ]. "',
	link='" . $_POST[ 'link' ]. "',
	post_at='" . $_POST[ 'post_at' ]. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:index.php');
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM posts where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<html>
<head>
<title>Update</title>
<style>
body{width:1200px;font-family:arial;letter-spacing:1px;line-height:20px;margin: 0 auto;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Back On The Track</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Izmeni zapis</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Naslov: </label><br>
	  <input type="text" name="post_title" class="demo-form-field" value="<?php echo $result[0]['post_title']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Ukratko: </label><br>
	  <input type="text" name="sum" class="demo-form-field" value="<?php echo $result[0]['sum']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Opis: </label><br>
	  <textarea name="description" class="demo-form-field" rows="5" required ><?php echo $result[0]['description']; ?></textarea>
  </div>
  <div class="demo-form-row">
	  <label>Slika: </label><br>	  <img src="<?php echo $result[0]['img']; ?>" width="200"><br /><br />
	  <input type="text" name="img" class="demo-form-field" value="<?php echo $result[0]['img']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Link: </label><br>
	  <input type="text" name="link" class="demo-form-field" value="<?php echo $result[0]['link']; ?>" required  />
  </div>
  <div class="demo-form-row">
	  <label>Datum: </label><br>
	  <input type="date" name="post_at" class="demo-form-field" value="<?php echo $result[0]['post_at']; ?>" required />
  </div>
  <div class="demo-form-row">
	  <input name="save_record" type="submit" value="Sacuvaj" class="demo-form-submit">
  </div>
  </form>
</div>
</body>
</html>