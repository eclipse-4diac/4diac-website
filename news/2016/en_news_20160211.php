<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	FORTE Code Repository is Public Again
</div>
<div class="news">
	<span class="left"><?php $date="2016-02-11 21:30"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>We achieved a great next milestone on our way to Eclipse: FORTE's code is again available. But now via the GIT repository provided by the Eclipse foundation. In addition to GIT we now have also a Gerrit instance for FORTE. This does not only allow you to easily follow our developments it makes it also much easier for you to submit us contributions for inclusion in FORTE.</p>

<p>Details on the cloning the FORTE GIT repository and the Gerrit instance can be found 
<a href="https://projects.eclipse.org/projects/iot.4diac/developer">here.</a></p>

<?php include 'greeting.html';?>
