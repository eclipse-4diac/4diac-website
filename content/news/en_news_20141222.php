<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	2nd Maintenance Release for 4DIAC 1.6
</div>
<div class="news">
	<span class="left"><?php $date="2014-12-22 11:34"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the second maintenance release for 4DIAC 1.6 providing a set of bug fixes to 4DIAC-IDE (8), FORTE (1), and the 4DIAC Systems (1). Because of some technical problems with Sourceforge's release system this maintenance release got delayed about one and a half week. We are very sorry for this inconvenience.</p>
<p>As always please download, test, and report problems and bugs.</p>
<ul>
	<ul>
		<li>4DIAC-IDE:
			<ul>
				<li>Issue in using the wrong monitoring update rate</li>
				<li>[issues:#947] Parameter Layout for FBs in 4DIAC</li>
				<li>[issues:#935] assertion failed error in 4DIAC debug perspective</li>
				<li>Several updates and fixes in the 4DIAC help</li>
				<li>[issues:#943] Rewire of connections not possible in resource editor</li>
				<li>[issues:#944] 4DIAC Help change request, and some minor updates</li>
				<li>[issues:#942] Invoking Watch all in the ResourceEditor cause Exception</li>
				<li>[issues:#941] CompositeFB Instance Viewr is missing an Icon</li>
			</ul>
		</li>
		<li>FORTE:
			<ul>
				<li>[issues:#946] Subsequent download fails while system monitoring is active</li>
			</ul>
		</li>
		<li>Systems:
			<ul>
				<li>[issues:#939] TrafficLight Simulation does not work any more</li>
			</ul>
		</li>
	</ul>
</ul>
<?php include 'greeting.html';?>