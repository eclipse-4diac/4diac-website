<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Presentations of 2016 4diac Users' Workshop Available
</div>
<div class="news">
	<span class="left"><?php $date="2016-10-04 18:30"; echo $date;?></span> 
	<span class="center"><img src="img/uws.png" alt="release" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>At the 2016 4diac users' workshop we had again a great program. 
It consisted of 4diac applications in smart grids and robot coordination control, utilizing OPC UA as communication protocol, 
verified compilers and formal behavior specification, and experiences from using 4diac in teaching IEC 61499 lab courses. 
The presentations are now available at the <a href="https://www.eclipse.org/4diac/en_uws.php">4diac users' workshop page<a>.</p>

<p>Furthermore we had a live demo from <a href="http://www.conmeleon.org/">Conmeleon</a> showing how 4diac controlled lights 
and interacted with <a href="http://www.openhab.org/">openHAB</a> in a home automation scenario.<p>

<p>It was a great event and we want to thank again all speakers and attendees. We are already looking forward to the next users' workshop!</p>

<?php include 'greeting.html';?>
