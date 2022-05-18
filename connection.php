<?php

	$con=mysql_connect("localhost","root","","se_project");

	if(mysql_connect_error()){
		echo"Cannot connect to database";
		exit();
	}

?>