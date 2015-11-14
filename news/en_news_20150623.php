<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Program for 6th 4DIAC Users' Workshop Available
</div>
<div class="news">
	<span class="left"><?php $date="2015-06-23 22:21"; echo $date;?></span> 
	<span class="center"><img src="../img/uws.png" alt="release" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>The full program of the upcoming 4DIAC Users' Workshop is now fixed and available at the <a href="en_workshop_2015.php">workshop page</a>. As in the last years we got very interesting submission and are pleased to announce five talks.</p>
<p>Furthermore we will have a set of posters showing further usage examples of 4DIAC.</p>
<p>Looking forward to meet you at this great event in Luxembourg.</p>
<?php include 'greeting.html';?>
