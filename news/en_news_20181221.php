<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac 1.10.1: First Maintenance Release for 4diac 1.10.1
</div>
<div class="news">
	<span class="left"><?php $date="2018-05-28 10:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the first maintenance release for 4DIAC 1.10 providing a set 3 usability bug fixes for 4diac-ide, and 1 for forte.</p> 

<p>As always please download, test, and report problems and bugs. 
For 1.10.0 users a simple <i><q>Help -> Check of Updates</q></i> 
should upgrade you to 1.10.1.</p>


<?php include 'greeting.html';?>
