<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Open Call for Proposals from Manufacturing SMEs (deadline December 15<sup>th</sup>)
</div>
<div class="news">
	<span class="left"><?php $date="2016-11-11 14:30"; echo $date;?></span> 
	<span class="center"><img src="img/uws.png" alt="comunity" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>Manufacturing SMEs with innovating ideas for CPPS experiments based on the BEinCPPS reference architecture 
(which includes 4diac as a component) are invited to apply, deadline December 15<sup>th</sup> 2016, 
funding of at most 120 000 E, approximate starting date April 2017. 
More details can be found at the <a href="http://www.beincpps.eu/">BEinCPPS project website</a>. 
Please don't hesitate to contact us for questions</p>

<?php include 'greeting.html';?>