<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	2nd Release Candidate for 1.7 Release
</div>
<div class="news">
	<span class="left"><?php $date="2015-03-13 18:23"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>This release candidate contains fixes for connection selection and deletion, problems when selecting types, handling the monitoring of internal variables, issue in th setFromMiliSconds as well as updated real-time event function blocks.</p>
<?php include 'greeting.html';?>