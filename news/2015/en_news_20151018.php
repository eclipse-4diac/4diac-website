<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Come to the dark side we have cookies!
</div>
<div class="news">
	<span class="left"><?php $date="2015-10-18 22:30"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Since the Eclipse Mars release I've playing around with the new dark theme of Eclipse. Finally during the this weekend I spend some time to improve 4DIACs look on the dark theme. No you can also edit your IEC 61499 control applications with the dark them enabled.</p>
<?php include 'greeting.html';?>

<p><img src="https://www.eclipse.org/4diac/news/figs/darktheme.png" alt="screenshot of 4DIAC using the dark theme" width="750"/></p>
