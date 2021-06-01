<?php

$username = 'root';
$password = "";
$server = 'localhost';
$db = 'phpconn';

$con = mysqli_connect($server,$username,$password,$db);


if($con){
    echo "Connection Successful";
}
else{
    echo "Connection failed";
}

?>