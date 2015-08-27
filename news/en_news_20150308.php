<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4DIAC Accepted as Eclipse Project 
</div>
<div class="news">
	<span class="left"><?php $date="2015-03-08 19:42"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Great news: this week the Eclipse Foundation finally accepted our project proposal and 4DIAC will finally get an official Eclipse project. Soon you will find the 4DIAC content at <a href="http://www.eclipse.org/4diac">http://www.eclipse.org/4diac</a></p>
<?php include 'greeting.html';?>