<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac 1.10.0 Release Candidate 2 Published!
</div>
<div class="news">
	<span class="left"><?php $date="2018-10-30 16:35"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>In our work on the 4diac 1.10.0 release we reached a next step! 
We handled 7 issues for 4diac IDE and 6 for 4diac FORTE. For both we mainly fixed stability and usability issues. 

<p>We provide a nightly build update site which allow to automatically update your 4diac IDE. Just add <br/><i>http://download.eclipse.org/4diac/nightly/update</i><br/>to your update sites. <p>
</p>

<?php include 'greeting.html';?>