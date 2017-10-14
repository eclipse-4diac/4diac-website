<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	First Release Candidate for Upcoming 4diac 1.8 Release
</div>
<div class="news">
	<span class="left"><?php $date="2016-06-03 17:20"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>It is a great pleasure for us to announce the first release candidate for the upcoming 4diac 1.8 release. 
With this release candidate we not only want to give you a sneak preview of all the cool new features 
(e.g., monitoring of adapter interfaces) but also want to start the final testing phase.</p> 

<p>The highlights of the upcoming release are:</p>
<ul>
	<li>New more modern icon set</li>
	<li>Adapter connections now have an own separate color</li>
	<li>Reworked ECC editor which allows to edit ECCs, algorithms, and internal variables without switching to another tab</li>
	<li>Improved ST parser for better code completion and syntax highlighting</li>
	<li>New experimental automatic communication generation plugin</li>
	<li>Monitoring of adapter interfaces</li>
	<li>Improved performance of monitoring in 4DIAC-IDE</li>
	<li>Support for new devices: Lego Mindstorms EV3, Raspberry SPS</li>
	<li>Reduced memory requirements of device management by about 2/3rds</li>
	<li>Cleaned-up and better structured the boiler example</li>
</ul>
<p>For supporting the feature freeze phase we created named branches in the 4DIAC repositories. 
These shall be used for the bug fixing phase towards version 1.8 and also for upcoming bug fix releases. 
The name of the branch is 1.8.x.
Looking forward to your feedback. </p>
<?php include 'greeting.html';?>

