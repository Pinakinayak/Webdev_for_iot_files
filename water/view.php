 
 <?php
        include 'db.php';
        $table="automation";
        $result=mysqli_query($con,"SELECT * FROM sensordata ORDER BY serial DESC LIMIT 1 ");


 
 $data=mysqli_fetch_assoc($result);
 $a1=$data["light1"];
 $a2=$data["light2"];
 $a3=$data["light3"];
 $a4=$data["light4"];
 $a5=$data["light5"];
 $a6=$data["light6"];
 $a7=$data["ac1"];
 $a8=$data["ac2"];
 $a9=$data["projector"];
 $a10=$data["pc"];
 $a11=$data["fan1"];
 $a12=$data["fan2"];
 $a13=$data["sensitivity"];

$array = array($a1,$a2,$a3,$a4 ,$a5 ,$a6 ,$a7 ,$a8 ,$a9 ,$a10,$a11 ,$a12 ,$a13);
echo json_encode($array);
 	
 mysqli_close($con);
  ?>


