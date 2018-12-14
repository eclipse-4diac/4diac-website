<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Every Detail Matters!
</div>
<div class="news">
	<span class="left"><?php $date="2018-12-14 20:34"; echo $date;?></span> 
	<span class="center"></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>We are currently in the middle of collecting feedback how we can improve 4diac. 
To show you that we value your feedback, we can announce that already two smaller but really disturbing issues have been identified and fixed:</p>
<ul>
    <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=542674">Updating FBs lead to loss of connection layout information</a></li>
    <li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=542683">Updating Subapps was not possible</a></li>
</ul>
    
<p>These fixes will be available in the upcoming 1.10.1 maintenance release.</p>

<p>We really need your feedback and there are several ways:</p>
<ul>
    <li>Submit issues and suggestions through our <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=4DIAC">bug tracker</a></li>
    <li>Fill out our anonymous <a href="https://goo.gl/forms/hVivvJKgTbD9HciI3">4diac IDE UX questionnaire</a></li>
    <li>Participate in our <a href="https://doodle.com/poll/ksfb2fat32zcx9zv">usability assessment</a></li>
</ul>

<p>Thanks in advance for your support,
	<br>The 4diac Team</p>
<br>
