/*The script to connect your PHP to your SQL database, create a filename init.php in your www directory of wampserver and use this to initialize code*/
<?php
$Database = "Yenko";
$Username = "Root";
$Password = ""; /*Leave the password blank*/
$Server = "localhost";

$con = mysqli_connect($Server, $Username, $Password, $Database);
?>
