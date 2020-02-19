<?php
/**
 * using mysqli_connect for database connection
 */

$Host = 'localhost';
$dbName = 'perpustakaan';
$Username = 'root';
$Password = '';

$mysqli=mysqli_connect($Host, $Username, $Password, $dbName); 

?>