<?php

function connection(){
	$con =mysqli_connect('localhost','root','','local_use');
	if(!$con){
	die("Connection to database failed");
	}
	return $con;
}