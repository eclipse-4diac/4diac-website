<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4DIAC Release 1.7.0
</div>
<div class="news">
	<span class="left"><?php $date="2015-04-09 16:42"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the new major release of 4DIAC V1.7.0. As always, this release is a combined release of all current 4DIAC projects: 4DIAC-IDE, 4DIAC-LIB, FORTE, and 4DIAC-Systems. The main improvements for 1.7.0 are:</p> 
<ul>
	<li>Monitoring is extended to the internals of Composite Function Blocks</li>
	<li>Support for the PFC 200 PLC from WAGO</li>
	<li>Performance and memory usage improvements in FORTE</li>
	<li>New communication protocol EclipseSCADA SFP all</li>
	<li>New improved editor for service sequence diagrams</li>
</ul>
<p>Furthermore many improvements and bug-fixes have been performed. Together with the issues fixed during the maintenance of the last major release 44 issues could be solved. 
	<br>As always please download, test, and report problems and bugs.
</p>
<?php include 'greeting.html';?>
