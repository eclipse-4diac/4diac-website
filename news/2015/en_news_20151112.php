<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Next Step in the Migration to Eclipse
</div>
<div class="news">
	<span class="left"><?php $date="2015-11-12 22:45"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>In our work to migrate 4DIAC to Eclipse the next step will be to move the forum. We kindly ask you to direct your questions about 4DIAC on the new forum at: <a href="http://eclipse.org/forums/eclipse.4diac">http://eclipse.org/forums/eclipse.4diac</a>

<p>However this does not mean that your existing messages will be lost. The existing forum messages at SourceForge will be put into readonly mode on friday November 20th and can still be searched and read.</p>

<p>Looking forward to read you in our new forum!</p>

<?php include 'greeting.html';?>
