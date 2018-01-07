<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac in Action @ SPS/IPC/DRIVES Italy
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-05 19:00"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>
At the 2017 SPS/IPC/DRIVES Italy (May 23.-25.) we will show 4diac FORTE running on Bosch Rexroth XM22 PLC controlling a 3d printed production system model 
and communicating to higher level systems using MQTT. 
Looking forward to meet you at the Bosch Rexroth booth (Pavillon 5 – Stand H038).
</p>
<?php include 'greeting.html';?>

