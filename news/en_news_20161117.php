<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	2<sup>nd</sup> Maintenance Release for 4diac 1.8
</div>
<div class="news">
	<span class="left"><?php $date="2016-11-17 19:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the second maintenance release for 4DIAC 1.8 providing a set of bug fixes to 4diac-ide, and FORTE.
As always please download, test, and report problems and bugs.</p>
<p>The main changes are:</p>
<ul>
	<li>4DIAC-IDE:
		<ul>
      		<li>Improved transition condition editing property sheet with code completion and syntax higlighting of condition expressions</li>
      		<li>Fixed transition coditions without events to conform to IEC 61499-1 Ed. 2</li>
      		<li>Fixed handling the array size of internal variables leading to wrong C++ code</li>
      		<li>Correctly check for names of Algorithms, States, and internal variables</li>
      		<li>Allow Algorithm editing also in the algorithm overview property sheet</li>
      		<li>Null pointer exception when reordering actions</li>
      		<li>Clean-up of algorithm editing and state editing property sheets</li>		
      	</ul>
	</li>
	<li>FORTE:
		<ul>			
       		<li>Fixed serial communication layer on win32 platform</li>
      		<li>Fixed TOUPPER and TOLOWER string fucntion</li>
      		<li>Fixed compiler warnings and cppcheck reports</li>
      		<li>Fixed memory leak in Posix thread</li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>