<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	1<sup>st</sup> Maintenance Release for 4DIAC 1.7
</div>
<div class="news">
	<span class="left"><?php $date="2015-05-07 17:31"; echo $date;?></span> 
	<span class="center"><img src="../img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the first maintenance release for 4DIAC 1.7 providing a set of bug fixes to 4DIAC-IDE (9), and FORTE (2).</p>
<ul>
	<li>4DIAC-IDE:
		<ul>
			<li>Fix issue that comments are not visualized on MacOS on TypeEditor</li>
			<li>renamed config.h to forte_config.h to aviod name clashes with other libraries</li>
			<li><a href="https://sourceforge.net/p/fordiac/issues/997">[issues:#997]</a> Edit/Save Time Error</li>
			<li><a href="https://sourceforge.net/p/fordiac/issues/999">[issues:#999]</a> adapter CFB</li>
			<li>fixed issues that adapter names are not updated in the fb network in CFBs</li>
			<li><a href="https://sourceforge.net/p/fordiac/issues/983">[issues:#983]</a> Direct Access to Resource</li>
			<li><a href="https://sourceforge.net/p/fordiac/issues/928">[issues:#928]</a> undo for Application delete</li>
			<li><a href="https://sourceforge.net/p/fordiac/issues/1008">[issues:#998]</a> 4diac ide composite adapter error</li>
			<li>Updated dependencies for making it easier to build 4DIAC-IDE</li>
		</ul>
	</li>
	<li>FORTE:
		<ul>
			<li><a href="https://sourceforge.net/p/fordiac/issues/1008">[issues:#1008]</a> monitor adapters in CFBs</li>
			<li>renamed config.h to forte_config.h to avoid name clashes with other libraries</li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>
