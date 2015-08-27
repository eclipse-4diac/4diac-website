<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	New Roadmap and Planning Page
</div>
<div class="news">
	<span class="left"><?php $date="2015-01-14 21:20"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>In the recent years the development process of 4DIAC has become quite in-transparent. In order to overcome this situation we resurrect the <a href="https://sourceforge.net/p/fordiac/wiki/Roadmap/">4DIAC Roadmap Page</a>. Furthermore, to allow all 4DIAC users to better participate in the planning we created an own forum for discussing the current and future 4DIAC development plans, which can be found <a href="https://sourceforge.net/p/fordiac/discussion/plans_roadmap/">here</a>.</p>
<?php include 'greeting.html';?>