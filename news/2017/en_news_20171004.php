<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
Energy Load Management with 4diac by Awite Bioenergie GmbH
</div>
<div class="news">
	<span class="left"><?php $date="2017-10-04 08:34"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
As part of the <a href="http://www.cpse-labs.eu/">CPSE Labs project</a>, which received funding by the European Union's Horizon 2020 research and innovation programme under grant agreement No 644400, <a href="http://www.awite.de/">Awite Bioenergie GmbH</a> successfully completed its experiment on <i>Energy and Load Management in Process Technology Using IEC 61499</i> and 4diac. Enjoy the summary of their results on youtube:
</p> 

<iframe width="420" height="315" src="https://www.youtube.com/embed/VqQVdPE6lm0"></iframe> 

<?php include 'greeting.html';?>
