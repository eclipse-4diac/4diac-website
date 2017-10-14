<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	2<sup>nd</sup> Maintenance Release for 4DIAC&nbsp;1.7
</div>
<div class="news">
	<span class="left"><?php $date="2015-08-30 19:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the second maintenance release for 4DIAC 1.7 providing a set of bug fixes to 4DIAC-IDE (7), and FORTE (1). </p>
<p>As always please download, test, and report problems and bugs. </p>
<ul>
	<li>4DIAC-IDE:
		<ul>
      <li><a href="/p/fordiac/issues/623/">[issues:#623]</a> Own color for adapter connections</li>
      <li>closed monitoring connection to shutdown devices so that masive log messages are avoided as seen in the several bug reports</li>
      <li><a href="/p/fordiac/issues/980/">[issues:#980]</a> Location of Ports</li>
      <li><a href="/p/fordiac/issues/1017/">[issues:#1017]</a> System Import from XML file</li>
      <li><a href="/p/fordiac/issues/1025/">[issues:#1025]</a> Open Application Editor on Application Create</li>
      <li><a href="/p/fordiac/issues/1031/">[issues:#1031]</a> delete all ECC elements when service sequence element of outline is selected causes NPE</li>
      <li><a href="/p/fordiac/issues/1038/">[issues:#1038]</a> clicking on internal variable within outline causes exception</li>       
		</ul>
	</li>
	<li>FORTE:
		<ul>			
       <li><a href="/p/fordiac/issues/1033/">[issues:#1033]</a> adapter data connections cause crash using arrays</li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>
