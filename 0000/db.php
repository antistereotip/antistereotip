<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}
?>
<?php
$database_username = 'root';
$database_password = '';
$pdo_conn = new PDO( 'mysql:host=localhost;dbname=test', $database_username, $database_password );
$pdo_conn->exec("set names utf8mb4");
?>
