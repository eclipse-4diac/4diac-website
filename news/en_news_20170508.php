<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac @ RMLL 2017 in France
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-08 15:00"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>
As as representant of the <a href="http://fossee.in/">FOSSEE (Free and Open Source Software for Education) Project</a> based at IIT Bombay <a href="http://akshaim.in/">Mr. Akshai</a> will give a talk at <a href="https://2017.rmll.info/en/">RMLL 2017</a> in France on Monday 3rd July 2017. It will be about <a href="https://prog2017.rmll.info/apprentissage-de-l-automation-industrielle-a-l-aide-de-materiel-et-de-logiciel-libres?lang=en">"Learning Industrial Automation and Control using FLOSS and Open Source Hardware"</a> containing a 4diac demonstration. 
Looking forward to your attention.
</p>
<?php include 'greeting.html';?>

