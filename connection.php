<?php
$servername="localhost";
$user="root";
$pass="";
$database="allumni";
$conn=false;

function executeQuery($query)
{
	global $servername, $user, $pass,$database;
	$conn = @mysql_connect($servername,$user,$pass) or die("Could not connect to server");
	@mysql_select_db($database,$conn);
	
	$result=@mysql_query($query);
	if(!$result)
	{
		echo " error while executing Query".@mysql_error();
			
	}
	
	else
	{
		return $result;
		
	}
	
	
	
	
	
	


}

?>
