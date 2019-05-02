<?php
/*
 * Edit Account User (online)
 * Host		=
 * User		= 
 * Pass		= 
 * dbase	= 
 * ----------------------------
 * Edit Account User (local)
 * Host		= localhost
 * User		= root
 * Pass		= rootwdp
 * dbase	= database
 */
 
 
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$passHost="";
	$dbase	= "dataweb_master";//dataweb_standart
	
	$link=mysql_connect($host, $user,$pass)or die(mysql_error());
	mysql_select_db($dbase)or die(mysql_error());
?>