<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Virtual IoT Meetup up Industrial IoT with 4diac
</div>
<div class="news">
	<span class="left"><?php $date="2017-01-29 22:15"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>
In the next Virtual IoT Meetup on Fabruary 16<sup>th</sup> we will present how 4diac can be used to not only develop real-time control applications 
but also how to enhance it with IoT connectivity. 
For more details have a look on the <a href="https://www.meetup.com/de-DE/Virtual-IoT/events/236869741/?rv=ea1&_af=event&_af_eid=236869741&https=on">Virtual IoT Meetup page</a>.
</p>

<?php include 'greeting.html';?>