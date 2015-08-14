<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Integrating 4DIAC with Eclipse SCADA
</div>
<div class="news">
	<span class="left"><?php $date="2014-10-13 22:13"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Two Eclipse IoT projects are working together to demonstrate another step towards a complete open source industrial control ecosystem. The integration example contains a visualization of a simulated tank system with automatic fill level control, where the control algorithm is implemented using 4DIAC and Eclipse SCADA displays the operator screen.</p>
<p>The example process consists of a tank with a control valve controlling the inflow and a pump controlling the drain. A PID controller operates the valve to keep the fill level at the desired set point. The pump is controlled manually and acts as a disturbance to the system. The operator screen is already finished:</p>
<figure>
	<img src="img/tankModel.jpg" alt="tank model"/>
	<figcaption>tank model</figcaption>
</figure>
<p>On-screen, the pump speed and the controller set value can be adjusted by clicking the bar graphs at the desired position. The application also provides a manual override feature for the valve. In automatic mode, the valve bar graph displays the controller output value and is colored gray to show that no direct manipulation is possible. In manual mode, the bar graph is colored blue and the user is able to set the position of the control valve in the same way as for the other bar graphs.</p>
<p>The next step is to set up the communication between 4DIAC and Eclipse SCADA. For this, we will use Eclipse SCADA's Small Footprint Protocol (SFP). SFP is currently under development and 4DIAC will be one of the first users. SFP is designed to enable small embedded devices to deliver data directly to management applications, such as a SCADA system.</p>
<p>The full source code for this integration example will be released and distributed with 4DIAC as soon as it is ready. We are still working on how to package this example best so that it can serve as a convenient starting point for your own solutions.</p>
<p>Ben Schneider
	<br>fortiss An-Institut Technische Universität München
	<br>schneibe (at) in.tum.de
</p>
<?php include 'greeting.html';?>