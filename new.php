<?php

$_servername="locahost";
$db_username="root";
$db_password="root";
$database="mapme";
$conn= new mysqli_connect($_servername,$db_username,$db_password,$database);

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} 
else 
{
    echo 'Phew we have it!';
}
if(!$conn)
{
    die('could not connect to Mysql database');   
}
echo'Connection Successful';

