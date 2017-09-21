<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	INSYS icom Provides Preconfigured 4diac Containers
</div>
<div class="news">
	<span class="left"><?php $date="2017-06-28 19:30"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
A few weeks ago we presented how the MR routers from INSYS icom can be turned into PLCs with 4diac. 
Now we are happy to announce that INSYS icom is providing preconfigured 4diac enabled application containers for this routers. 
This greatly reduces the setup and getting started effort for using 4diac on MR routers. 
Details can be found at the <a href="https://www.insys-icom.de/icom-smartbox/container">INSYS icom website</a>.
</p>
<?php include 'greeting.html';?>
