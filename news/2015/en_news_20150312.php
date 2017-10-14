<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Follow us on ... 
</div>
<div class="news">
	<span class="left"><?php $date="2015-03-12 21:48"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>To make it even easier to follow our updates and share your work done with 4DIAC we created for your convenience groups in the following social and professional networks:</p>
<ul>
	<li><a href="https://www.linkedin.com/groups/4DIAC-6949091?home=&gid=6949091">LinkedIn</a></li>
	<li><a href="https://www.xing.com/communities/groups/4diac-1076214">Xing</a></li>
	<li><a href="https://plus.google.com/communities/101972285570306852659">Google+</a></li>
</ul>
<?php include 'greeting.html';?>