<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root'; // Change this to your user
$db_pass		= 'xxxxxxx'; // Change this to your password
$db_database	= 'sales'; // Change this to your database name 

/* End config */

$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>