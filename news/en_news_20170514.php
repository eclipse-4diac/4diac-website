<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	uMIC.200 Control Device Support
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-14 19:50"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>
<table>
	<tr>
		<td width="640px" style='padding-right:10px;'>
			<p>With our work on 4diac 1.9.0 we are proud to announce that FORTE now supports the uMIC.200 control devices from the company MicroControl. 
			The uMIC.200 is a compact automation controller, which features in addtion to 8 digital IOs also several communication interfaces. 
			Details can be found at the <a href="http://www.microcontrol.net/en/products/control-systems/umic200/">uMIC.200 website</a>.</p>

			<p>For testing grab the latest FORTE version from the our <a href=" (http://git.eclipse.org/c/4diac/org.eclipse.4diac.forte.git)">Git repository</a>.</p>			
		</td>
		<td width="260px" style='padding-left:10px;'>
			<div align="right">
			<img alt="uMic.200" src="http://www.microcontrol.net/fileadmin/_processed_/csm_uMIC200_1200px_db13955608.png"><br>
			<i>Source: MicroControl</i></div>
		</td>
	</tr>
</table>
</p>
<?php include 'greeting.html';?>

