<?php
include_once ("functionsql.php");
	$conn=connect();
	$data  = mktime(0, 0, 0, date("m")  , date("d")-5, date("Y"));
	$str="SELECT data,temp FROM dati  WHERE data>=\"$data\"";
	$result=mysql_query($str)or die("query fallita: " . mysql_error());
	while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
			 $str1[] = array(
	            'data' => $row['data'],
	            'value' =>$row['temp'],);		}
	//header("Content-Type: application/json", true);            
	//header("Content-type: application/json");
	echo json_encode($str1);

?>
