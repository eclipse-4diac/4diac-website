<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Showing Your Use of 4diac
</div>
<div class="news">
	<span class="left"><?php $date="2016-09-23 14:20"; echo $date;?></span> 
	<span class="center">
	<table><tr>
		<td>
		<img src="media/poweredby4diac_small.png" alt="release" height="50"/>
		</td>

		<td >
		<img src="media/poweredby4diac_large.png" alt="release" height="50"/>
		</td>
	</tr></table>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>As announced at the 4diac users' workshop we provide now new template for 4diac stickers to be put on controllers, 
laptops, web-pages, t-shirts. You can download them <a href="en_dow.php">here</a>. 
</p>

<?php include 'greeting.html';?>

