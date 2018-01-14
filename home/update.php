<?php
	include 'db.php';

	$r=$_REQUEST["k"];
	$result=mysqli_query($con,"SELECT " .$r. " FROM automation ORDER BY serial DESC LIMIT 1 ");
	 $data=mysqli_fetch_assoc($result);
	 $value=$data[$r];
	 if($value==0)
	 {
	 	$val=1;
	 } else
	 {
	 	$val=0;
	 }

	mysqli_query($con,"update automation set ".$r."=".$val." where serial=0");
		

?>