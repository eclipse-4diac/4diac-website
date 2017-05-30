<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Turning Communication Devices into PLCs
</div>
<div class="news">
	<span class="left"><?php $date="2017-05-30 18:00"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
With routers and switches getting more powerful they become a perfect target to execute control algorithms on them. 
Together with the company <a href="https://www.insys-icom.com/icom/en">INSYS icom</a> we give a first impression of how this could be achieved with 
4diac in an german article in the <a href="http://www.sps-magazin.de/?inc=artikel/article_show&nr=127120">SPS Magazine</a>.
</p>
<?php include 'greeting.html';?>
