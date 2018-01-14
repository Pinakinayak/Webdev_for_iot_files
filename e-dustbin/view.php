 <style type="text/css" media="screen">
 th
 {
 	color: brown;
 	font-family: arial;
 	font-size: 22px;
 	text-decoration: underline;
 	 line-height: 300%;
 }	

 </style>
 <?php
        include 'db.php';
        $result=mysqli_query($con,"SELECT * FROM sensordata ORDER BY serialno DESC LIMIT 5");

?>
<table border-color="black" width="100%">
<tr><th>Sensor One</th><th>Sensor Two</th><th>Sensor Three</th><th>Mean</th><th>TimeStamp</th></tr>   
<?php while($data=mysqli_fetch_assoc($result)){
	$mean=($data["sensor1"]+$data["sensor2"]+$data["sensor3"])/3;
	mysqli_query($con,"update sensordata set mean=".$mean." where serialno=".$data["serialno"]);
?> 

<tr>  
        <td><?php echo $data["sensor1"];?></td>
        <td><?php echo $data["sensor2"];?></td>
        <td><?php echo $data["sensor3"];?></td>
        <td><?php echo $mean;?></td>
        <td><?php echo $data["timestamp"];?></td>
        
</tr>

<?php  };?>
</table>

