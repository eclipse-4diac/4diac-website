<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Seminar: Getting started with IEC 61499
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-04 22:20"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>
As a part of the seminar series organized by the Bavarian Mechatronics & Automation Cluster, fortiss offers a course introducing the IEC 61499 standard. 
The full-day course (in German) will be held on June 27th in Munich. 
It will give an overview of the models defined in IEC 61499 and how to apply them to the development of distributed automation and control systems 
utilizing the Eclipse 4diac. </p>

<p>Further details and registration information can be found on the 
<a href="http://www.cluster-ma.de/veranstaltungskalender/clusterveranstaltungen/events-details/index.html?tx_cwcmaeventmanager_pi1[event]=1495">web-page of the seminar</a>. 
</p>
<?php include 'greeting.html';?>
