<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	New 4diac Webpage
</div>
<div class="news">
	<span class="left"><?php $date="2015-08-19 19:52"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Finally our new <a href="http://www.eclipse.org/4diac/">4diac webpage</a> on Eclipse went online. It will replace the <a href="http://www.fordiac.org/">former page</a>. In the upcoming days the former page will be relinked to our new page and therefore put offline.</p>
<?php include 'greeting.html';?>