<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	3<sup>rd</sup> Maintenance Release for 4DIAC&nbsp;1.7
</div>
<div class="news">
	<span class="left"><?php $date="2015-11-04 13:00"; echo $date;?></span> 
	<span class="center"><img src="../img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the third maintenance release for 4DIAC 1.7 providing a set of bug fixes to 4DIAC-IDE (4), and FORTE (1). </p>
<p>As always please download, test, and report problems and bugs. </p>
<ul>
	<li>4DIAC-IDE:
		<ul>
      <li>Fixed issue on data to adapter connection creation reported in: <a href="https://sourceforge.net/p/fordiac/discussion/708248/thread/0b653d89/">4DIAC IDE null pointer exception trying to link to E_TimeOut</a>
          </li>
      <li><a href="/p/fordiac/issues/1050/">[issues:#1050]</a> Plug-in org.fordiac.ide.fbt.typemanagement was unable to load class org.eclipse.ui.editors.text.TextEditor</li>
      <li>Resource out of sync error occurring after system creation or saving of resources as reported in: <a href="https://sourceforge.net/p/fordiac/discussion/708249/thread/7d40c9dc/">4DIAC resource out of sync with file system</a></li>
       <li><a href="/p/fordiac/issues/1050/">[issues:#1052]</a> Wrong evaluation of ECC guarding conditions due to missing parentheses</li> 
		</ul>
	</li>
	<li>FORTE:
		<ul>			
       <li>Fixed issue with STOP handling in E_RESTART reported in: <a href="https://sourceforge.net/p/fordiac/discussion/708249/thread/c56bbd60/">Problem with programatically causing a stop operation in a 4DIAC application via Forte</a></li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>
