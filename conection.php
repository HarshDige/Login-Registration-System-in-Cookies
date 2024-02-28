<?php
$hostname="localhost";
$dbname="main";
$db_uname="root";
$db_pass="";

$conn=mysqli_connect($hostname,$db_uname,$db_pass,$dbname);


if($conn)
{
    //    echo "Connection Succesful.";
}
else
{
    echo "Connection Failed..";
    die();
}
?>
