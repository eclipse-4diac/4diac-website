<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac 1.10.0 Release is ready for download! 
</div>
<div class="news">
	<span class="left"><?php $date="2018-11-29 21:01"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>We are very proud to announce the 4diac 1.10.0 rlease!
As with the 1.9.0 release we managed to get a bunch of cool new improvements into our two main 4diac components:</p>

<ul>
    <li><b>4diac IDE:</b>
        <ul>
        	<li>Finally you can develop <i>Simple FBs</i></li>
        	<li>We reworked the deployment and monitoring infrastructure removing many issues we had there</li>
        	<li>Stabilized Subapp support</li>
        	<li>Many smaller usability improvements</li>
        </ul>
    </li>
    
    <li><b>4diac FORTE:</b>
        <ul>
        	<li>4diac FORTE got more then 10% faster</li>
        	<li>HTTP communication layer</li>
        	<li>FMI/FMU support for connecting 4diac FORTE to different simulation tools</li>
        	<li>Connect to XBase data bases</li>
        	<li>New platforms: PLCnext, pikeOS, freeRTOS, and ROS!</li>
        </ul>
    </li>
</ul>

<p>With this release we provide an update site for 4diac IDE. 
This update site allows an easy upgrade of your existing 4diac IDE to the latest version. 
Just add <br/><i>http://download.eclipse.org/4diac/updates/latest</i><br/>to your update sites. <p>
</p>

<?php include 'greeting.html';?>