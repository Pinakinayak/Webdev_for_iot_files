<?php
  include 'db.php';
        $result=mysqli_query($con,"SELECT timestamp,mean FROM sensordata ORDER BY serialno DESC LIMIT 5");
        		$data=mysqli_fetch_assoc($result);
				//start time
				$datetime2 = new DateTime($data["timestamp"]);//end time
				$mean2=$data["mean"];
				$temp=$mean2;
				$mean1=$temp;
				$temp2=$datetime2;
				$datetime1=$temp2;
				$i=0;
       do
        	{	$temp2=$datetime1;
        		$temp=$mean1;
        		$data=mysqli_fetch_assoc($result);
        		$mean1=$data["mean"];
				$datetime1 = new DateTime($data["timestamp"]);
        		$i=$i+1;	
        	} while($i<5&&($temp>$data["mean"]));
        	
        	
        	$datetime1=$temp2;	
			$interval = $datetime1->diff($datetime2);
			$minutes = $interval->days * 24 * 60;
			$minutes += $interval->h * 60;
			$minutes += $interval->i;
			$hour=$minutes/60;
			
			

if($mean2!=$temp):
			$meandiff=$mean2-$temp;
			$perhour=round($meandiff/$hour,2);
			$timerem=100-$mean2;
			$timerem=round($timerem/$perhour,3);

			if ($timerem<=1) :  ?>
						<audio autoplay hidden="hidden">
					   		 <source src="alert/danger.mp3" type="audio/mpeg">
						</audio>
			<?php endif;?>
	 			<p style="margin-left:40px;">Time remaining to fill E-Dustbin <br><span><?php echo $timerem;?> Hours(approx)<span></p>
<?php else :?>
			<p style="margin-left:40px">Recently cleaned? Wait to get prediction </p>
<?php endif;?>