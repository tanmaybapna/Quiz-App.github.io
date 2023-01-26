<?php
/* Database config */
 $db_host		= 'localhost';
 $db_user		= 'zslrmxss_tanmay';
 $db_pass		= '@Tanmaydb2022';
 $db_database	= 'zslrmxss_tanmay'; 

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
