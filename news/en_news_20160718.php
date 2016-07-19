<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Third Release Candidate for 4diac 1.8
</div>
<div class="news">
	<span class="left"><?php $date="2016-07-19 11:25"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
This release candidate contains many stabilization fixes for 4diac-ide, improved C++ exporter, IEC 61499 XML export for systems, 
documentation updates, Forte memory issues in device management command parsing, raw, and mqtt layer, updated code for Wago PFC200. </p>

<p>Looking forward to your feedback.</p> 
<?php include 'greeting.html';?>

