<?php
    include_once 'connection.php';

    @$id= $_POST['id'];
    @$fname= $_POST['fname'];
    @$addr =$_POST['addr'];
    @$mobile=$_POST['mobile'];
    @$dob=$_POST['dob'];
    @$username=$_POST['username'];
    @$passwd=$_POST['passwd'];

    $sql= "UPDATE new SET fname='{$fname}', addr='{$addr}', mobile='{$mobile}', dob='{$dob}', username='{$username}', passwd='{$passwd}' WHERE id= '$id'";
    $data=mysqli_query($conn,$sql) or die("Query unsuccessfull");

    header("Location: http://localhost/task/register/datafetch.php");

    mysqli_close($conn);
?>