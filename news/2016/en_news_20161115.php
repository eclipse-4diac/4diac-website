<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	See 4diac Live @ SPS/IPC/DRIVES in Nuremberg Next Week
</div>
<div class="news">
	<span class="left"><?php $date="2016-11-15 21:50"; echo $date;?></span> 
	<span class="center"> </span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>We are honored to demonstrate 4diac at the SPS/IPC/DRIVES next week (Nov 22.-24.). We will present 4diac FORTE running on Bosch Rexroth PLCs and communicating to higher level systems using MQTT. Looking forward to meet you at the Eclipse Foundation Europe booth (7-450).</p>

<?php include 'greeting.html';?>