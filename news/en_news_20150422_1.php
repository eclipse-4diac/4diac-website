<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Call for Presentations for the 6th 4DIAC Users' Workshop
</div>
<div class="news">
	<span class="left"><?php $date="2015-04-22 10:06"; echo $date;?></span> 
	<span class="center"><img src="../img/uws.png" alt="release" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>It is a great pleasure for us to announce that the 4DIAC Users' Workshop will be held again in conjunction with the <a href="http://www.etfa2015.org/">IEEE ETFA conference</a>, Luxembourg. 
	<br>Similar to last years the 4DIAC Users' Workshop intends to be an opportunity to present your work and projects related to 4DIAC as well as exchange ideas and discuss the near future planned enhancements of the open source initiative with the development team. In addition to presentations this year’s workshop will also provide the possibility for people that are not able to join us in person to present their use of 4DIAC in form of a poster. 
	<br>You can find the template to submit a presentation or a poster proposal and information about the <a href="en_workshop_2014.php">5th 4DIAC Users' Workshop</a> and  information about the <a href="en_uws.php">previous workshops</a>.</p>
<p>The deadline for the submission of workshop presentation and poster proposals is May 15th, 2015. 
<p>If you have any question, do not hesitate to contact us.</p>
<?php include 'greeting.html';?>
