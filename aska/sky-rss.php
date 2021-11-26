<!doctype html>
<html lang="en">
<?php include './include/head.php'; ?>


<body class="bg-light">
    
<?php include './include/main-nav.php'; ?>

<?php include './include/sub-nav.php'; ?>
 
 
 

    
<!-- Glavni kontejner -->
<main class="container">
   
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset"> 
<h1>Aska Global News - SKY</h1>
<img src="./media/aska.png"/>
</div>





<!-- sky svet -->
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

<!-- sky zabava -->
<div class="my-3 p-3 bg-body rounded shadow-sm sedamdeset">
<?php
$rss = simplexml_load_file('https://feeds.skynews.com/feeds/rss/entertainment.xml');
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
