<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac 1.9.0 Release Candidate 3 Published!
</div>
<div class="news">
	<span class="left"><?php $date="2018-03-27 11:40"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>In our work on the 4diac 1.9.0 release we finally reached a next step! 
We handled 20 issues for 4diac-ide and 3 for 4diac-rte. 
For both we mainly fixed stability and usability issues.</p>

<p>With this release we are behind our planned release date. 
The main reason for this is that we wanted to wait for the 0.3 release of open62541 so that we can give you an improved OPC UA experience in 4diac.
As this release is now available we are now finalizing the formal procedures for Eclipse project releases. 
This should be finished with in the next weeks so that we finally have the 
<a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.9.0">1.9.0 release</a> in April.</p>

<p>4diac 1.9. RC3 reached now a state where we strongly recommend all <b>1.8.4 users</b> to migrate now!</p>

<?php include 'greeting.html';?>

<p>P.S.: Please also activate the automatic error reporting facility. This really helps us improving 4diac-ide.</p><br/>
