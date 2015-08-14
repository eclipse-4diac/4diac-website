<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	5th 4DIAC Users' Workshop @ IEEE ETFA 2014 
</div>
<div class="news">
	<span class="left"><?php $date="2014-10-17 21:41"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>In the last years the 4DIAC users' workshop has become an integral part of the ETFA conference. Also this year in its 5th edition we could attract six very interesting presentations. The presentations on the one hand targeted infrastructure enhancements and on the other hand communication aspects. In the session questions and issues regarding 4DIAC were discussed in an open round.</p>
<p>The intense discussions after the session, during the lunch break, and especially during the afternoon session showed the interest in IEC 61499 and 4DIAC as well as the importance of providing a discussion platform for current and potential 4DIAC users. We are already looking forward to the next user's workshop.</p>
<p>A detailed overview on the program of the users' workshop as well as the presentations are <a href="en_workshop_2014.php">here</a></p>
<?php include 'greeting.html';?>