<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Half day IEC 61499 Introduction
</div>
<div class="news">
	<span class="left"><?php $date="2018-08-28 17:30"; echo $date;?></span> 
	<span class="center"></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>You always wanted to know more about what this IEC 61499 thing is and how it can help you to implement better automation solutions. 
This is your chance. 
We’ll give a half day introductory training on IEC 61499 on September 13. in Munich. 
For details and registration have a look <a href="https://kompetenzzentrum-augsburg-digital.de/veranstaltung/thema-steuerungsprogramme-sept18/">here</a>.

<?php include 'greeting.html';?>