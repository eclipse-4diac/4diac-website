<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	2015's 4DIAC Users' Workshop Presentations Online
</div>
<div class="news">
	<span class="left"><?php $date="2015-10-02 21:47"; echo $date;?></span> 
	<span class="center"><img src="img/uws.png" alt="release" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>We just uploaded the presentations given at this year's <a href="https://www.eclipse.org/4diac/en_workshop_2015.php" rel="nofollow">4DIAC Users' Workshop</a>. As in the last years we had a great program with presentations covering topics like cyber security, formal verification and how to manage external events in 4DIAC, to name only some examples. </p>

<p>In addition to the presentation the afternoon session featured great discussions on using 4DIAC and open points in its development. Furthermore we gave a sneak preview on the upcoming features like the new system perspective layout, the improved application palette and the great new ECC editor. 
</p>

<p>We are already looking forward to the next users' workshop.</p>
<?php include 'greeting.html';?>
