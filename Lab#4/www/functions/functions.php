<?php
	$mysqli = false;
	function connectDB()
	{
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "midps");
		$mqsli->query("SET NAMES 'utf-8'");
	}

	
	function closeDB()
	{
		global $mysqli;
		$mqsli->close ();
	}
	
	
?>