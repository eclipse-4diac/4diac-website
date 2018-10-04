<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac-rte on PikeOS
</div>
<div class="news">
	<span class="left"><?php $date="2018-06-26 16:35"; echo $date;?></span> 
	<span class="center"><img src="news/figs/basys40.png" alt="BaSys4.0" width="100"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>As part of the <a href="https://www.basys40.de/">BaSys4.0 project</a>, which receives funding of the <a href="https://www.bmbf.de/en/index.html">Federal Ministry of Education and Research</a>, 4diac has been ported to <a href="https://www.sysgo.com/products/pikeos-hypervisor/">PikeOS</a>, which is built by <a href="https://www.sysgo.com/">SYSGO AG</a>. PikeOS combines a Real Time Operating System with a virtualization platform and an Eclipse based IDE for safety critical embedded systems with certification requirements in the fields of aerospace and defence, automotive, industrial automation, and medical systems. This provides the opportunity to benefit from the safety features of PikeOS for 4diac.</p>

<p>Special thanks to Caspar Gries and Agostino Mascitti from SYSGO AG, who provided the patch which ports the 4diac-rte to PikeOS.</p>

<?php include 'greeting.html';?>