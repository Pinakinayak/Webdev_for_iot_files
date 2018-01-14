<?php


		include 'db.php';
		$result=mysqli_query($con,"SELECT * FROM sensordata ORDER BY serialno DESC LIMIT 1");
		$data=mysqli_fetch_assoc($result);
		
		$sensor1=$data["sensor1"];
		$sensor2=$data["sensor2"];
		$sensor3=$data["sensor3"];
		$mean=$data["mean"];
		$array = array($sensor1,$sensor2,$sensor3,$mean);
		echo json_encode( $array );



?>