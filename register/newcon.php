<?php

$host="localhost";
$user="root";
$pass="";
$db="regform";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
    die("conn failed");
}
echo "conn successsfully";
?>
