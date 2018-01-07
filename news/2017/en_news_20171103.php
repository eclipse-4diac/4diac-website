<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac @ Eclipse Day Lyon
</div>
<div class="news">
	<span class="left"><?php $date="2017-11-03 21:40"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>On November 28<sup>th</sup> Sylvain Pastor from <a href="https://rtone.fr/sylvain-pastor-embedded-software-development-manager/">Rtone</a> 
will give a talk on 4diac at the <a href="http://www.digital-league.org/evenement/eclipse-day-lyon/">Eclipse Day Lyon</a>. 
If you are in the Lyone area at that day make sure to pass by and see live what 4diac can do for you!</p>

<?php include 'greeting.html';?>