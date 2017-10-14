<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac @ Eclipse DemoCamp
</div>
<div class="news">
	<span class="left"><?php $date="2016-12-08 15:22"; echo $date;?></span> 
	<span class="center"> </span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>Eclipse 4diac™ was presented at the Eclipse DemoCamp in Munich on December 5<sup>th</sup>. 
An introduction to its capabilities was followed by the demonstration of a 3D-printed prototype of a un/stacker module controlled by an 
IndraControl XM22 PLC from Bosch Rexroth. 
The PLC received the commands from an HMI and sent its states back using MQTT messages, 
allowing the user to see in real-time the process steps of the prototype.</p>

<figure class="single">
	<img src="https://www.eclipse.org/4diac/news/figs/EclipseDemoCamp.png" width="600px" alt="4diac at Eclipse Demo Camp"/>
	<figcaption>4diac at Eclipse Demo Camp with IndraControl XM22 PLC from Bosch Rexroth controlling a 3D-printed prototype of a un/stacker module</figcaption>	
</figure>

<?php include 'greeting.html';?>