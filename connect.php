<?php

$host="localhost";
$user="id22370939_root_login";
$pass="@Joglodephis123";
$db="id22370939_joglodephis_login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}
?>
