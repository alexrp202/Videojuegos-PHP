<?php
	$conexion= new mysqli("localhost", "root", "usbw", "test");
	//Comprobar conexion
	if(mysqli_connect_errno())
	{
		printf("Fallo la conexion");
	}
	
?>