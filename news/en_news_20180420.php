<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	The job's been done: 4diac 1.9.0 is ready for download!
</div>
<div class="news">
	<span class="left"><?php $date="2018-04-20 14:00"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Two years ago we started on a mission of not only finally bringing all 4diac code to Eclipse but also prepare the 4diac code for the next 10 years. 
After 240 resolved issues and more 1000 commits we can say that this mission was accomplished!</p> 

<p>We worked on so many places. The most prominent improvements for users are:</p>
<ul>
  <li>Renewed documentation with clearer information making the learning curve very smooth</li>
  <li>Create and deploy sub-applications</li>  
  <li>Add and configure modular devices easily with our new IO infrastructure</li>
  <li>Be part of the IoT and Industry 4.0 with new and improved MQTT and OPC UA features</li>
  <li>Cleaner UI and lots of smaller usability improvements (get more with less clicks)</li>
</ul>

<p>And for developers:</p>
<ul>
  <li>More features, less code and less bugs</li>
  <li>No CppChecks warning or errors</li>
  <li>Code quality tested with Sonarqube and Coverity Scan</li>
  <li>No more broken nightly versions of 4diac-ide and 4diac-rte with automatic CI triggered on gerrit and git pushes</li>
</ul>

<p>With that we are looking forward to your feedback and start the planning process for the next version.</p>

<?php include 'greeting.html';?>
