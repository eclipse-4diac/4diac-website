<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	3<sup>rd</sup> Maintenance Release for 4diac 1.8
</div>
<div class="news">
	<span class="left"><?php $date="2016-12-22 12:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the third maintenance release for 4DIAC 1.8 providing a set of bug fixes to 4diac-ide, and FORTE.
As always please download, test, and report problems and bugs.</p>

<h3>Attention</h3> 
<p><i>Because of build issues we had to change the name of thread.h to forte_thread.h and from sycn.h to forte_sync.h. 
If you have your own FORTE extensions using these you need to adjust the include statements accordingly.</i></p>

<p>The main changes are:</p>
<ul>
	<li>4DIAC-IDE:
		<ul>
      		<li>The values and the yellow box of monitored elements are now transperent allowing to see connections below them</li>
      		<li>Improved ST code generation</li>
      		<li>Removed interface groups in FB outlines and reworked icons for the interface elements</li>
      		<li>Improved FAQs and MQTT documentation</li>
      		<li>12 stability fixes identified through the automatic error reporting infrastructure</li>
      	</ul>
	</li>
	<li>FORTE:
		<ul>			
       		<li>Fixed issue in MQTT initialization and for using MQTT on Windows</li>
      		<li>Fixed names of the thread and sync include files to solve compiliation issues with some libraries (e.g., Eclipse Paho)</li>
      		<li>Added new CMake option for allowing modules to be outside of the FORTE build tree</li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>