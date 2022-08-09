<?php
//die('Medvedima pristup zabranjen !!!');
if(!empty($_POST["add_record"])) {
	require_once("db.php");
	$sql = "INSERT INTO posts ( post_title, sum, description, img, link, post_at ) VALUES ( :post_title, :sum, :description, :img, :link, :post_at )";
	$pdo_statement = $pdo_conn->prepare( $sql );	
	$result = $pdo_statement->execute( array( ':post_title'=>$_POST['post_title'], ':sum'=>$_POST['sum'], 
	':description'=>$_POST['description'], ':img'=>$_POST['img'], ':link'=>$_POST['link'], ':post_at'=>$_POST['post_at'] ) );
	if (!empty($result) ){
	  header('location:index.php');
	}
}
?>
<html>
<head>
<title>Dodaj zapis</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="logo.png"/>
<style>
body{width:1200;font-family:arial;letter-spacing:1px;line-height:20px;margin: 0 auto;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Back On The Track</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Dodaj zapis</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  <label>Naslov: </label><br>
	  <input type="text" name="post_title" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Ukratko: </label><br>
	  <input type="text" name="sum" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <label>Opis: </label><br>
	  <textarea name="description" class="demo-form-field" rows="5" required ></textarea>
  </div>
  <div class="demo-form-row">
	  <label>Slika: </label><br>
	  <input name="img" class="demo-form-field" rows="5" required >
  </div>
  <div class="demo-form-row">
	  <label>Link: </label><br>
	  <input name="link" class="demo-form-field" rows="5" required />
  </div>
  <div class="demo-form-row">
	  <label>Datum: </label><br>	  <input type="date" name="post_at" class="demo-form-field" required />
  </div>
  <div class="demo-form-row">
	  <input name="add_record" type="submit" value="Dodaj" class="demo-form-submit">
  </div>
  </form>
</div> 
</body>
</html>