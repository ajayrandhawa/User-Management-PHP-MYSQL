<?php 
// DB credentials.
define('DB_HOST','fdb15.eohost.com');
define('DB_USER','2520448_armentum');
define('DB_PASS','963852asd');
define('DB_NAME','2520448_armentum');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
