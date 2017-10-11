<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Talk on Using Edge Devices for Control Tasks
</div>
<div class="news">
	<span class="left"><?php $date="2017-10-11 19:42"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>At the upcoming cluster forum <i>Cloud Computing</i> organized by the <a href="http://www.cluster-ma.de/home/index.html">Cluster Mechatronik &amp; Automation e.V.</a> 
Florian Froschermeier (<a href="https://www.insys-icom.com/icom/en">INSYS icom</a>) will present how their edge device can be utilized in automation. 
This will also include how to use edge devices as controllers with 4diac.
Details on the program and registration for the cluster forum cloud computing can be found 
<a href="http://www.cluster-ma.de/fileadmin/user_upload/pdf/veranstaltungen/veranstaltungen2017/Clusterforum/171026_CF_CloudComputing.pdf">here</a>
<?php include 'greeting.html';?>