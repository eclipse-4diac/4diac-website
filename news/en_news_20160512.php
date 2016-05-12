<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Neon 4DIAC - Release Plans and Updates
</div>
<div class="news">
	<span class="left"><?php $date="2016-05-12 16:30"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>Yesterday the 4DIAC committers decided that the next 4DIAC release (1.8) will be based on the upcoming <a href="https://wiki.eclipse.org/Neon/Simultaneous_Release_Plan">Eclipse Neon</a>. 
Apart from the already implemented cool features like Lego Mindstorms EV3 support or the cleaned-up UI this will bring further 
improvements in performance and memory usage of 4DIAC-IDE. 
Those of you who are using 4DIAC-IDE from source will notice the change already when updating the source code from the repository.</p>

<p>For this we will provide a first release candidate within the next two weeks. 
The final release is planned shortly after the Eclipse Neon release on June 22nd.</p>

<p>Please support us with testing the release candidates and providing us feedback on issues.</p>

<?php include 'greeting.html';?>

<p>P.S: The announced parallel code-clean up is also progressing well. 
The UI model is already gone for good and many editors are already nearly fully functional again. 
The next steps are to implement the new mapping model and further clean-up the data model.<br></p>