<html>
<head>
<style>
html, body {
  width: 100%;
  height:100%;
}

body {
    background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
}
@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}
</style>
</head>
<body>

<?php
define('MyConst', TRUE);
require_once("_db.php");
$data = $pdo_conn->query('SELECT link FROM posts')->fetchAll(PDO::FETCH_ASSOC);
var_export($data);
?>
<hr />
<?php
$sve = $pdo_conn->query('SELECT * FROM posts')->fetchAll(PDO::FETCH_UNIQUE);
var_export($sve);
?>
<hr />
<?php
$link = $pdo_conn->query("SELECT * FROM posts WHERE link='https://antistereotip.net/'")->fetchAll(PDO::FETCH_ASSOC);
var_export($link);
?>
<hr />
<?php
$id = $pdo_conn->query("SELECT * FROM posts WHERE id > 100")->fetchAll(PDO::FETCH_ASSOC);
var_export($id);
?>
<hr />
<?php
$oid = $pdo_conn->query("SELECT * FROM posts ORDER BY id ASC")->fetchAll(PDO::FETCH_ASSOC);
var_export($oid);
?>
<hr />
<?php
$lnk = $pdo_conn->query("SELECT link FROM posts ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
var_export($lnk);
?>
<hr/>
<?php
$rss = simplexml_load_file('https://antistereotip.net/forum/index.php?mode=rss&items=thread_starts');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item) 
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
} 
?>
<?php
$rss = simplexml_load_file('https://feeds.skynews.com/feeds/rss/world.xml');
echo '<h2>'. $rss->channel->title . '</h2>';	
foreach ($rss->channel->item as $item)
{
 echo '<p class="title"><a href="'. $item->link .'">' . $item->title . "</a></p>";
 echo "<p class='desc'>" . $item->description . "</p>";
} 
?>
</body>
</html>
