<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac 1.9.0 Release Candidate 2 Published!
</div>
<div class="news">
	<span class="left"><?php $date="2018-02-14 08:13"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>In our work on the 4diac 1.9.0 release we reached a next step! 
We handled 6 issues for 4diac-ide and 3 for 4diac-rte. 
For both we mainly fixed stability and usability issues.</p>

<p>With this release we are well on track for the <a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.9.0">final release</a> on the 1st of March.</p>

<?php include 'greeting.html';?>