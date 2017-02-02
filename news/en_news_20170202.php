<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4<sup>th</sup> Maintenance Release for 4diac 1.8
</div>
<div class="news">
	<span class="left"><?php $date="2016-12-22 12:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the fourth maintenance release for 4DIAC 1.8 providing a set of bug fixes to 4diac-ide, and forte.
As always please download, test, and report problems and bugs.</p>

<p>The main changes are:</p>
<ul>
	<li>4diac-ide:
		<ul>
			<li>added first version of adapter tutorial</li>
			<li>property sheet to create connection from 2 selected interface elements</li>
			<li>set border color of adapters (fb-networks) to adapter connection color</li>
			<li>fix pasting of elements when something is selected</li>
			<li>fix mapping menu generation such that at least one function block or subapplication has to be selected</li>
			<li>fix for better handling wrong mgr_ID</li>
			<li>improved string replacement in virtualDNS</li>
			<li>error message dialog to inform the user if killing the device worked and for online start of function blocks</li>
			<li>made event connection creation more robust against broken connection parts</li>
			<li>improved output if the management command could not be formated</li>
			<li>not opening function block types when more then one element is selected</li>
			<li>redesign the layout of the FBTest editor</li>
			<li>profile saving for system files has been added in order to allow an easy migration from 1.8.x projects to the upcoming 4diac versions</li>
			<li>reenabled untyped subapp mapping for testing purposes</li>
			<li>order of the menu entries and their names have been changed to better follow the classical workflow</li>
      		<li>fixed <b>16</b> issues reported by AERI</li>
      	</ul>
	</li>
	<li>forte:
		<ul>			
			<li>fix for forcing of values</li>
			<li>reworked and fixed issues on the sysfs IOs for Linux based sysems (e.g., RaspberryPI, BeagleBoneBlack)</li>
			<li>fixed issue in for support external source directories</li>
		</ul>
	</li>
</ul>

<p>Many thanks to all who contributed by activating the automated error reporting (AERI)! AERI helps us to improve 4diac's stability, without the high effort of writting full bug reports.</p>

<?php include 'greeting.html';?>
