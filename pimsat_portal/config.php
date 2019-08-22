<?php
/////start session(when we login)
session_start();

////destory session(when we logout)
//session_destroy();

/////////Hide Errors
//error_reporting(0);

//connect to database
//mysqli_connect("server name", "user name", "password", "db name");
$mysqli=mysqli_connect("localhost", "root", "", "pimsat_portal");

if(!$mysqli){

	echo "Could not connect";
}




?>