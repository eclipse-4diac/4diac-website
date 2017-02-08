<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	1<sup>st</sup> Milestone on our Way to 1.9.0
</div>
<div class="news">
	<span class="left"><?php $date="2017-02-08 11:26"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>After roughly 10 months of hard work the clean-up and rework of 4diac-ide reached a state where we would like to share it with you. Just to give you an impression: we deleted more than 200 files and touched nearly all of our more then 2500 Java files.</p>

<p>The biggest observable change is that 4diac now uses IEC 61499-2 xml files for storing automation systems. In order to make the transition as easy as possible for you 4diac projects stored with 1.8.x already contain this file and can be imported and opened as before. For the best experience we recommend to use projects saved with 1.8.4.</p>

<p>Furthermore you will find some UI cleanups and smaller usability improvements which would not be possible in the old architecture.</p>

<p>In addition to the 4diac-ide we also added a preview of FORTE in this milestone release which contains as main new feature a first support for OPC UA utilizing the <a href="http://open62541.org/">open62541</a> library.</p>

<p>The next steps are to re-add subapplication support to 4diac-ide and finish the work on Bosch Rexroth IndraWorks PLC and Hilscher‘s netX chip support for FORTE.</p>

<?php include 'greeting.html';?>
