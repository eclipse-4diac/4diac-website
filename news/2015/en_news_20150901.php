<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	One Week till this Year's 4DIAC Users' Workshop
</div>
<div class="news">
	<span class="left"><?php $date="2015-09-01 22:45"; echo $date;?></span> 
	<span class="center"><img src="img/uws.png" alt="release" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>There is only one week left till this year's <a href="https://eclipse.dev/4diac/en_workshop_2015.php" rel="nofollow">4DIAC Users' Workshop</a>. As in the last years we have a great program with presentations covering topics like cyber security, formal verification and how to manage external events in 4DIAC, to name only some examples. </p>
<p>We are looking forward to meet you there.</p>
<?php include 'greeting.html';?>
