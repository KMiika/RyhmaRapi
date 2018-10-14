<?php
	try
	{
	 $conn_string = "mysql:host=localhost;dbname=simple_rest_api";
	 $db = new PDO ($conn_string, "webuser", "webpass");
	 $db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 //print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>
