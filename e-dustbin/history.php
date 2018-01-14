 <?php
        include 'db.php';
        $result=mysqli_query($con,"SELECT * FROM sensordata ORDER BY serialno DESC ");

?>
<table border="2" width="100%" >
<tr><th>Sensor One</th><th>Sensor Two</th><th>Sensor Three</th><th>Mean</th><th>TimeStamp</th></tr>   
<?php while($data=mysqli_fetch_assoc($result)){

?> 
<form>
<tr>    
        <td><?php echo $data["sensor1"];?></td>
        <td><?php echo $data["sensor2"];?></td>
        <td><?php echo $data["sensor3"];?></td>
        <td><?php echo $data["mean"];?></td>
        <td><?php echo $data["timestamp"];?></td>
        
</tr>
</form>
<?php  };?>
</table>

