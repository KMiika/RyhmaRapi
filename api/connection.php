<?php
	try
	{
	 $conn_string = "mysql:host=mysli.oamk.fi;dbname=opisk_t7koni00";
	 $db = new PDO ($conn_string, "t7koni00", "Seppo123");
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
