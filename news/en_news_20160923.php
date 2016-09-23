<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Showing Your Use of 4diac
</div>
<div class="news">
	<span class="left"><?php $date="2016-09-23 14:20"; echo $date;?></span> 
	<span class="center">
	<table><tr>
		<td>
		<img src="media/poweredby4diac_small_lowres.png" alt="powered by 4diac small" height="80"/>
		</td>

		<td >
		<img src="media/poweredby4diac_large_lowres.png" alt="powerd by 4diac large" height="80"/>
		</td>
	</tr></table></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>As announced at the 4diac users' workshop we provide now new template for 4diac stickers to be put on controllers, 
laptops, web-pages, t-shirts. You can download them <a href="en_dow.php">here</a>. 
</p>

<?php include 'greeting.html';?>

