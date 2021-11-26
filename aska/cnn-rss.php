<!doctype html>
<html lang="en">
<?php include './include/head.php'; ?>


<body class="bg-light">
    
<?php include './include/main-nav.php'; ?>

<?php include './include/sub-nav.php'; ?>
 
 
 

    
<!-- Glavni kontejner -->
<main class="container">
   
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset"> 
<h1>Aska Global News - CNN</h1>
<img src="./media/aska.png"/>
</div>



<!-- cnn zabava -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('http://rss.cnn.com/rss/edition_entertainment.rss');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>

<!-- cnn tehnologija -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('http://rss.cnn.com/rss/edition_technology.rss');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>

<!-- cnn svet -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('http://rss.cnn.com/rss/edition.rss');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>


<!-- cnn evropa -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('http://rss.cnn.com/rss/edition_europe.rss');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>

<!-- cnn evropa -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('https://feeds.skynews.com/feeds/rss/world.xml');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</div>
    













</main>
 

<footer id="footer" >
     <p>Powered by <a href="https://antistereotip.net">@hightech</a> & Protected by <a href="https://usk.rs">@uskrs</a> &#8620;</p>
    </footer>

<script src="./assets/dist/js/bootstrap.bundle.min.js"></script>

<script src="./assets/offcanvas.js"></script>
</body>
</html>
