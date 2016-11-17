<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	1<sup>st</sup> Maintenance Release for 4diac 1.8
</div>
<div class="news">
	<span class="left"><?php $date="2016-10-12 14:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We are proud to announce the first maintenance release for 4DIAC 1.8 providing a set of bug fixes to 4diac-ide, and FORTE.
As always please download, test, and report problems and bugs.</p>
<p>The main changes are:</p>
<ul>
	<li>4DIAC-IDE:
		<ul>
      		<li>Updated and restructuring the documentation</li>
      		<li>Better handling of transition condition parsing when arrays are used in transition condition</li>
      		<li>Cleaned-up and improved usability of action and algorithm editing</li>
      		<li>Avoiding wrong use of unmap all</li>
      		<li>Many smaller stabilization points</li>		
      	</ul>
	</li>
	<li>FORTE:
		<ul>			
       		<li>Fixed Modbus with no polling: client FB keeps on opening TCP connection</li>
      		<li>Fixes in Odriod analogue IO support</li>
      		<li>Fixes in EXPT function to make it more flexible to use in ST algorithms</li>
		</ul>
	</li>
</ul>
<?php include 'greeting.html';?>
