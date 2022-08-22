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
