<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Component Self Configuration by Accessing an AAS
</div>
<div class="news">
	<span class="left"><?php $date="2018-09-11 09:35"; echo $date;?></span> 
	<span class="center"></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>As part of the <a href="https://www.basys40.de/">BaSys4.0 project</a>, which receives funding of the <a href="https://www.bmbf.de/en/index.html">Federal Ministry of Education and Research</a>, 4diac has been extended to support component configuration during runtime, by accessing a kind of asset administration shell.
This work has been done in cooperation with the BaSys 4.0 partners. 
Special thanks to the BaSys 4.0 partner, who provided the example AutomationML for a pallet system, the example XQueries and the great introduction into the use of BaseX and XQueries. 
The AutomationML file is loaded into a BaseX database, which provides a kind of asset administration shell for the plant. 
This asset administration shell is then accessed during runtime to configure a function block, which controls the desired component.
This work has been published in the paper <i>Connecting PLCs with their Asset Administration Shell for Automatic Device Configuration</i> at the <a href="https://web.fe.up.pt/~indin2018/">INDIN 2018</a> conference.
</p>

<?php include 'greeting.html';?>
