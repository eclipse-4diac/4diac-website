<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Sourceforge Discussion Forums put into Read-Only Mode
</div>
<div class="news">
	<span class="left"><?php $date="2015-11-20 23:15"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>As announced today we have put the 4DIAC discussion forums on Sourceforge offline. From now on we kindly ask you to use our new forum at the Eclipse premises: <a href="http://eclipse.org/forums/eclipse.4diac">http://eclipse.org/forums/eclipse.4diac</a></p>

<p>If you find it more convenient we now also have a mailing list for interacting with 4DIAC developers and users. You can register here: <a href="https://dev.eclipse.org/mailman/listinfo/4diac-dev">https://dev.eclipse.org/mailman/listinfo/4diac-dev</a></p>

<?php include 'greeting.html';?>
