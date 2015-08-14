<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4DIAC Release 1.6.0
</div>
<div class="news">
	<span class="left"><?php $date="2014-01-10 17:47"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the new major release of 4DIAC V1.6.0. As always, this release is a combined release of all current 4DIAC projects: 4DIAC-IDE, 4DIAC-LIB, FORTE, and 4DIAC-Systems. The main improvements for 1.6.0 are:</p>
<ul>
	<li>4DIAC-IDE: integrated Help Contents, extended Subapplication support and UI cleanup for FB type editor</li>
	<li>FORTE: Support of MQTT and New Platforms as Raspberry PI, Beagle Bone Black</li>
	<li>4DIAC-LIB: Common I/O Function Blocks as IX and QX and Array handling blocks</li>
	<li>4DIAC-Systems: Traffic light</li>
</ul>
<p>Furthermore many smaller improvements and bug-fixes have been performed. Together with the issues fixed during the maintenance of the last major release 100 issues could be solved. As always please download, test, and report problems and bugs.</p>
<?php include 'greeting.html';?>