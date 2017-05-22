<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Sneak Peek on SPS/IPC/DRIVES Demonstrator
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-22 14:44"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<table width="100%">
	<tr>
		<td width="40%"><p>In the last weeks, the foritss team was busy setting up the demonstrator for the SPS/IPC/DRIVES Italy starting tomorrow. It features cool things like a 3D printed factory model, 4diac applications running on the Bosch Rexroth XM22 PLC, IoT connectivity with MQTT, and an HMI with HTML5. 
		<br>Got curious? Then visit us in Parma to see it!</p>
<?php include 'greeting.html';?>
</td>
		<td><figure>		
	<img alt="3d printed factory model" src="news/figs/spsIpcDrivesItaly.JPG" width="400"><br>
	<figcaption>3d printed factory model</figcaption>
</figure></td>
	</tr>
</table>