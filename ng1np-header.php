<!DOCTYPE html>
<html>
<head>
<meta charset="<?php echo $this->charset; ?>">
<meta name="keywords" content="<?php echo $this->keywords; ?>">
<meta name="description" content="<?php echo $this->description; ?>">
<meta name="author" content="<?php echo $this->author; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $this->title; ?></title>
<link rel="stylesheet" href="inc/stil.css">
</head>
<body>
<p><a href="https://usk.rs" style="color: lightblue;">
    Back on the Track</a></p><br>
<h1 class="animacija">Uprava is Coming. All About Universe. Kingest Regards. Admin.</h1>
<h2 class="animacija razmak_dole">Engine UP. Simple PHP 
    Engine - Ng1np.</h2>
    <P style="color: white;"><span style="color: yellow">
        How it works</span> (<span style="color: orange;">eng</span> 
        <span style="color: violet;">in*</span> <span style="color: lightblue;">up</span>
        - <span style="color: lightgreen;">ng1np</span>):<br>
        - (Include) <span style="color: #17f118;">inc/</span> header.php, meni.php, footer.php, style.css ...<br>
        - (Controller) <span style="color: #17f118;">set/</span> class.php, fnc.php ...<br>
        - (Model) <span style="color: #17f118;">lib/</span> default.php, second.php, third.php, fourth.php, fifth.php, 
        <span style="color: orange;">god.php</span> ...<br>
        - (View) <span style="color: #17f118;">up/</span> default.tpl, second.tpl, third.tpl, fourth.tpl, fifth.tpl, 
        <span style="color: orange;">god.tpl</span> ... <br />
        <span style="color: yellow">Logic</span> <b>(GOD mode)</b>: god >> ROOT >> USER >> Processes >> Servers >> Default routing ...
    </p><br />
<p><marquee>Everything You Should Know About Universe. 
    Ask ng1np Admin. Nick: hightech. E-mail: milutingavrilovicbeograd [at] gmail [dot] com</marquee></p>
<?php
$dir = "./pic/";
#---ucitavanje vrednosti iz foldera u niz---#
$pictures = glob($dir."*.png");
//var_dump($pictures);
shuffle($pictures);
?>
<div class="animacija razmak_gore">
<?php
#---prikazivanje 5 random slike iz niza $pictures---#
for ($i = 0; $i < 5; $i++) {
    echo "<img src='". $pictures[$i] ."' height='130'/>";
}
?>
</div>
<p></p>

