<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac @ SPS/IPC/DRIVES in Nuremberg
</div>
<div class="news">
	<span class="left"><?php $date="2016-11-25 14:18"; echo $date;?></span> 
	<span class="center"> </span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>4diac reports back from a successful SPS/IPC/DRIVES attendance where it presented FORTE on an IndraControl XM22 PLC from Bosch Rexroth. A boiler controller application published its current values through MQTT to iot.eclipse.org, where the subscribed values have been visualized by MQTT-Spy.</p>

<figure class="single">
	<img src="img/SPSIPCDrives.png" width="300px" alt="4diac on IndraControl XM22 PLC from Bosch Rexroth and visualized with MQTT-Spy"/>
	<figcaption>4diac on IndraControl XM22 PLC from Bosch Rexroth and visualized with MQTT-Spy</figcaption>	
</figure>

<?php include 'greeting.html';?>