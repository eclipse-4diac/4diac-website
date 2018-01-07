<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
4diac-ide Code Migrated to Eclipse Infrastructure
</div>
<div class="news">
	<span class="left"><?php $date="2017-08-30 22:50"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
Today we finally concluded a next major step in our migration to the Eclipse Foundation premises: 
we moved the the 4diac-ide code to the <a href="http://git.eclipse.org/c/4diac/org.eclipse.4diac.ide.git">new git repo</a>. 
This is an important milestone towards the 1.9 release.</p> 

<p>We have disabled public access to the old repository. Please use the new link from now on. 
</p>
<?php include 'greeting.html';?>
