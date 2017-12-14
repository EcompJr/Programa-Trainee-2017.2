<?php 
	require_once("MyDatabase.class.php");
	require_once("Member.class.php");


	$database = new MyDatabase();
	$member = new Member("Khaick","123456","khaick_brito@hotmail.com","25/01/1997");
	$database->addMember($member);
 ?>