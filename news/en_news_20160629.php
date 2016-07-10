<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Second Release Candidate for 4diac 1.8
</div>
<div class="news">
	<span class="left"><?php $date="2016-06-29 22:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>

This release candidate contains fixes for device parameters handling in system configuration editor and for deployment, 
clearer ways to delete resources, fixes in C++ code generation, memory leak on FORTE shutdown and support for the Conmeleon PLC. </p>
<?php include 'greeting.html';?>

