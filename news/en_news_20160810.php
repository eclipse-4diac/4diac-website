<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac Release 1.8.0
</div>
<div class="news">
	<span class="left"><?php $date="2016-08-10 08:26"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>We are proud to announce the new major release of 4diac V1.8.0. As always, this release is a combined release of all current 4diac projects: 4diac-ide, 4diac-lib, forte, and 4diac-systems. The main improvements for 1.8.0 are:</p>

<ul>
	<li>updated 4diac-ide icons</li>
	<li>rework of the ST algorithm parser</li>
	<li>changed to Java 1.8</li>
	<li>changed to Eclipse Neon</li>
	<li>added first version to generate communication function blocks automatically</li>
	<li>added first version to support monitoring of adapters</li>
	<li>improve monitoring</li>
	<li>reworked ECC editor</li>
	<li>updates for 4diac help files (MQTT, Raspberry-SPS, Lego EV3, Raspberry Pi, openPowerlink)</li>
	<li>updated boiler example project</li>
	<li>Reduced memory requirements of device management by about 2/3rds</li>
	<li>added raw layer</li>
	<li>integrated automated error reporting (aeri)</li>
	<li>Platform support 
		<ul>
			<li>Raspberry-SPS</li>
			<li>CONMELON C1 PLC</li>
			<li>Lego Mindstorms EV3</li>
			<li>analog IOs for Wago PFC 200</li>
			<li>Odroid analog inputs</li>
		</ul>
	</li>
</ul>

<p>Furthermore many improvements and bug-fixes have been performed. Together with the issues fixed during the maintenance of the last major release 172 issues could be solved.</p>

<p>As always please download, test, and report problems and bugs.</p>

<?php include 'greeting.html';?>

