<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	First Maintenance Release for 4DIAC 1.6 
</div>
<div class="news">
	<span class="left"><?php $date="2014-11-04 12:08"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the first maintenance release for 4DIAC 1.6 providing bug fixes to 4DIAC-IDE (5) and 4DIAC-Systems (1).</p>
<p>As always please download, test, and report problems and bugs.</p>
<ul>
	<li>4DIAC-IDE:
		<ul>
			<li>[issues:#937] Monitor system connection establishment blocks when devices are not avialable</li>
			<li>[issues:#936] 4DIAC type export wizard fails to update forte with option "Overwrite without warning" enabled</li>
			<li>[issues:#934] 4DIAC application editor "Update function block" command is not working</li>
			<li>[issues:#932] modify with constraints also in data interface elements</li>
			<li>[issues:#931] ST Time literal export fails</li>
		</ul>
	</li>
	<li>4DIAC-Systems:
		<ul>
			<li>[issues:#930] disable traffic lights when it is green for the pedestrians</li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>