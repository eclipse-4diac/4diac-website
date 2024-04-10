<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	uMIC.200 Control Device Support
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-14 19:50"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<table width="100%">
	<tr>
		<td width="60%"><p>With our work on 4diac 1.9.0 we are proud to announce that FORTE now supports the uMIC.200 control devices from the company MicroControl. 
The uMIC.200 is a compact automation controller, which features in addtion to 8 digital IOs also several communication interfaces. 
Details can be found at the <a href="http://www.microcontrol.net/en/products/control-systems/umic200/">uMIC.200 website</a>.</p>
<p>For testing grab the latest FORTE version from the development branch of <a href="https://github.com/eclipse-4diac/4diac-forte">FORTE's Git repository</a>.			
</p>
<?php include 'greeting.html';?>
</td>
		<td><figure>		
	<img alt="uMic.200" src="https://www.microcontrol.net/fileadmin/_processed_/csm_uMIC200_1200px_db13955608.png"><br>
	<figcaption>Source: MicroControl</figcaption>
</figure></td>
	</tr>
</table>