<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Feature Freeze for Release 1.7 on Mar. 31
</div>
<div class="news">
	<span class="left"><?php $date="2015-03-03 22:01"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>It is a great pleasure for us to announce the feature freeze phase for the upcoming 4DIAC release 1.7. In order to support testing and give you a sneak preview of the cool new features (e.g., monitoring of composite function blocks) we created a first release candidate 1.6_RC1. The highlights of the upcoming release are:</p>
<ul>
	<li>Monitoring of Composite Function Blocks</li>
	<li>Support for the PFC 200 PLC from WAGO</li>
	<li>Performance and memory usage improvements in FORTE</li>
	<li>New communication protocol EclipseSCADA SFP</li>
	<li>New improved editor for service sequence diagrams</li>
</ul>
<p>For supporting the feature freeze phase we created named branches in the 4DIAC Mercurial repositories. These shall be used for the bug fixing phase towards version 1.7 and also for upcoming bug fix releases. The name of the branch is 1.7.x. Looking forward to your feedback.</p>
<?php include 'greeting.html';?>