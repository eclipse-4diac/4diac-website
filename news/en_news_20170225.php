<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	For those who missed it: 4diac Virtual Iot Meetup Video
</div>
<div class="news">
	<span class="left"><?php $date="2017-02-25 16:20"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>
On February 16<sup>th</sup> we gave a short overview on IEC 61499 and 4diac. If you missed the video of the talk is now online. </p>

<?php include 'greeting.html';?>

<iframe width="560" height="315" src="https://www.youtube.com/embed/1z3pxDngQG8" frameborder="0" allowfullscreen></iframe>

<br>