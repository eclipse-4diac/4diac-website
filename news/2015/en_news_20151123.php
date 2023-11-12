<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4DIAC Enabled CONMELEON C1 PLC
</div>
<div class="news">
	<span class="left"><?php $date="2015-11-23 17:30"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Today we have a guest news entry presenting the CONMELEON C1 PLC:</p> 

<p><img src="https://eclipse.dev/4diac/news/figs/logo_conmeleonc1.svg" alt="Conmeleon C1 Logo" width="125"/> is a low cost but professional automation expansion board for the Raspberry Pi 2 B. 
      Together with the Raspberry the C1 board turns into a powerful PLC for small scale automation projects. 
      Currently the CONMELEON team works on a direct integration of their hardware platform into the 4DIAC environment. 
      First tests of the digital inputs and outputs with FORTE 1.7 have already been successful and they are looking forward to be part of the upcoming 1.8 release of  4DIAC.			
</p>
<h3>Key facts:</h3>
<ul>
    <li>4 analog inputs 0-10V, 12 bit resolution, up to 3,3 kHz sample rate</li>
    <li>4 digital inputs at 24V HTL level, optically decoupled</li>
    <li>4 digital outputs, relay NO max. 3A @ 250VAC or 5A @ 30 VDC</li>
    <li>40 pin connector for Raspberry Pi Model 2 B</li>
    <li>Internal mikroBUS&trade; interface for future expansion</li>
    <li>Power supply 12-24V DC</li>
    <li>Easy to handle detachable screw terminals</li>
    <li>Operating temperature with attached Raspberry Pi 0 &deg;C to 50 &deg;C</li>
    <li>Protection class IP20</li>
    <li>Humidity class F, no condensation</li>
</ul>   

<table><tr>
		<td >
			  <img src="https://eclipse.dev/4diac/news/figs/conmeleonc1board.jpeg" alt="CONMELEON C1 board" width="350"/>
		</td>
    <td width="40">
		</td>
    <td >
			   <img src="https://eclipse.dev/4diac/news/figs/conmeleonc1housing.jpeg" alt="3D printed housing of CONMELEON C1 board" width="350"/>
		</td>
</tr></table>


<p>You can get a glimpse on the CONMELEON board at this years SPS IPC Drives in Nuremberg on 24. to 26.11.2015 at hall 8 booth 8-411 and you are also welcome to visit the 
<a href="http://www.conmeleon.org">project website</a>.<p>

