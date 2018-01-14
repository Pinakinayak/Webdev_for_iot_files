<?php
		include 'db.php';
		$result=mysqli_query($con,"SELECT * FROM sensordata ORDER BY serialno DESC LIMIT 1");




	
					$data=mysqli_fetch_assoc($result);
					$sensor1=round(($data["mq-1"]/1023)*100,2);
					$sensor2=round(($data["mq-2"]/1023)*100,2);
					$sensor3=round(($data["mq-3"]/1023)*100,2);
					$sensor4=round(($data["mq-4"]/1023)*100,2);
					$sensor5=round(($data["mq-5"]/1023)*100,2);
					$sensor6=round(($data["mq-6"]/1023)*100,2);
					$sensor7=round(($data["mq-7"]/1023)*100,2);
					$sensor8=round(($data["mq-8"]/1023)*100,2);
					$sensor9=round(($data["mq-9"]/1023)*100,2);
					$sensor11=round(($data["barometer"]/1023)*100,2);
					$sensor10=round(($data["pressure"]/1023)*100,2);
					$sensor13=round($data["temp"]*2);
					
					$sensor12=round(($data["humidity"]),2);
					
					$array = array($sensor1,$sensor2,$sensor3,$sensor4 ,$sensor5 ,$sensor6 ,$sensor7 ,$sensor8 ,$sensor9 ,$sensor10,$sensor11 ,$sensor12 ,$sensor13);
							echo json_encode( $array );
?>


