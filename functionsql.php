<?php
function connect()
{
	$host="127.0.0.1";
	$user="root";
	$pass="";
	$DB="tesina";
	$conn=mysql_connect($host,$user,$pass) or die("connessione non riuscita: " . mysql_error());
	mysql_select_db($DB) or die("connessione non riuscita: " . mysql_error());
	
	return $conn;
}

function selectuser($nomeuser)
{
	$str="SELECT * FROM users WHERE nome=\"$nomeuser\"";
	$result=mysql_query($str)or die("query fallita: " . mysql_error());	
	return $result;
}

function selectemp($data)
{
	$str="SELECT data,temp FROM dati  WHERE data>=\"$data\"";
	$result=mysql_query($str)or die("query fallita: " . mysql_error());	
	return $result;
}

?>
