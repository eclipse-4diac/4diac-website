<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	On our way to 1.8!
</div>
<div class="news">
	<span class="left"><?php $date="2015-12-04 12:47"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Today we released our first milestone on our way to 4DIAC 1.8! With this milestone release we want to give you a first impression of the cool new features that will come with 4DIAC 1.8. The main improvements in 1.8 M1 are:</p> 
<ul>
	<li>Extended FORTE Platform Support: 
		<ul>
		<li>RaspberryPi SPS</li>
		<li>RaspberryPi and BeagleBone black I/O interface based on sysfs. Therefore no additional libraries are needed anymore.</li>
		<li>First support for Lego Mindstorms EV3 (touch sensor, LEDs)</li>
		</ul>
	</li>
	<li>UI and Usability Improvements in 4DIAC-IDE:
		<ul>
		<li>New icons and improved look and feel of the application and system editors by adding a function block palette to the application editor and adding a FB library to the system in the project explorer.</li>
		<li>Cleaning up FB type editing for basic function blocks by moving algorithm and internal variable editing to the ECC editor greatly reducing the number of clicks and tab switches.
		<li>Generate communication function blocks between function blocks mapped to different resources</li>
		<li>Better integration of ST parsing for the algorithm editor allowing for better code completion and also better code generation</li>
		<li>Use Ed 2.0 Transition condition style (transition parser available)</li>
		<li>Cleanup of download perspective</li>
		<li>Adapter connections have own color</li>
		<li>Removed not needed menu and toolbar entries provided by different eclipse base plugins</li>	
		</ul>
	</li>
</ul>
<p>As always please download, test, and report problems and bugs. </p>

<?php include 'greeting.html';?>

<p>P.S.: There are still some cool features, like monitoring of adapters, breakpoints, or syntax highlighting and code completion for transition conditions in the queue for 1.8!</p>
<br>
