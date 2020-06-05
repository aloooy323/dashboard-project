<?php 

//conn parameters

$host = "localhost";
$user = "root";
$pwd = "";
$db = "webbased";


//make conn

$con = mysqli_connect($host, $user, $pwd, $db);


//handle exception

if(mysqli_connect_errno($con))
{
echo mysqli_connect_errno();
exit();

}











?>