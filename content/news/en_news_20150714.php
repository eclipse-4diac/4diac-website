<div id="20150714" class="newsheader">New 4DIAC Logo</div>
<div class="news">
	<span class="left"><?php $date="2015-07-14 23:22"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>In order to reflect our transition to an Eclipse project we decided to update the 4DIAC logo. We now proudly present it here:</p>
<img src="img/4diac.png"/>
<p>The great advantage of the new logo is that the left part will serve as our new application icon. We hope that you like our new logo as much as we do! </p>
<?php include 'greeting.html';?>