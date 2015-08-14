<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	The Beagles Have Landed! 
</div>
<div class="news">
	<span class="left"><?php $date="2014-10-20 22:42"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Just finished preparing the BeagleBone Black traffic lights for our talk together with <a href="http://www.eclipse.org/eclipsescada/">Eclipse SCADA</a> and <a href="http://www.eclipse.org/etrice/">eTrice</a> at EclipseCon Eruope on <a href="https://www.eclipsecon.org/europe2014/node/1072">Industrial-grade IoT with Eclipse Projects</a>. If you want to play more with them visit us at the <a href="https://www.eclipsecon.org/europe2014/playground">IoT Playground</a>.</p>
<figure>
	<img src="img/beagleBones.jpg" alt="BeagleBone Black in case with traffic light control"/>
	<figcaption>BeagleBone Black in case with traffic light control</figcaption>
</figure>
<?php include 'greeting.html';?>