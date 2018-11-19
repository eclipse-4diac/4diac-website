<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Improving 4diac IDE User Experience!
</div>
<div class="news">
	<span class="left"><?php $date="2018-11-19 15:15"; echo $date;?></span> 
	<span class="center"></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>For the last few releases we already had usability in focus. We reduced the number of clicks needed or reduced the screen clutter. 
For the next releases we would like to further emphasize on that.</p> 

<p>For that we need you! Please tell us what you like and what you don’t like! As starting point we created a questionnaire:<p>

<p style="text-align:center;"><b><a href="https://goo.gl/forms/hVivvJKgTbD9HciI3">4diac IDE Evaluation Questionnaire</a></b></p>

<p>Thanks in advance for your support!</p>

<?php include 'greeting.html';?>