
<?php

	$con=mysqli_connect("localhost","root","","airquality");
	if(!$con)
	{
		die("connection failed!".mysqli_connect_error());
	}

?>