<?php


$host ="localhost";
$name ="root";
$pass="";
$db="register";

$conn=mysqli_connect($host,$name,$pass,$db);
if(!$conn)
{
    die("conn failed");
}
echo "connection successfully";
?>
