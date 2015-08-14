<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Seminar: Getting started with IEC 61499 
</div>
<div class="news">
	<span class="left"><?php $date="2014-09-17 15:29"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>As a part of the seminar series organized by the <a href="http://www.cluster-ma.de/en/mechatronikakademie/weiterbildungsprogramm/index.html">Bavarian Mechatronics &amp; Automation Cluster</a>, the 4DIAC member fortiss offers a course introducing the IEC 61499 standard. The full-day course (in German) will be held on 10 November in Munich. It will give an overview of the models defined in IEC 61499 and how to apply them to the development of distributed automation and control systems. Further details and registration information can be found in the event <a href="http://www.cluster-ma.de/uploads/tx_cwcmaeventmanager/pdf/896a2345-821c-e411-90a4-005056a552a1.pdf">folder</a></p>
<?php include 'greeting.html';?>