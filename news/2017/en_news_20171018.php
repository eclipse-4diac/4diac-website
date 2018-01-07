<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Modular and more flexible control of Inputs &amp; Outputs (I/O)
</div>
<div class="news">
	<span class="left"><?php $date="2017-10-18 22:10"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>Since the beginning of times, the border between software and hardware was a very conflictive one. 
Until now, FORTE used an IO architecture that allowed users to select the actual hardware IO to be controlled by a Function Block by a simple change on the PARAM data input of it. 
This was improved by the introduction of VirtualDNS. 
But this approach has some issues, among which we could highlight the lack of modularity for I/O. 
PLCs' I/O often come as modules that you can easily attach to your device to extend its capabilities. 
This wasn't possible to emulate using FORTE and 4DIAC, but fear no more, because those days are over!</p>

<p>FORTE has recently added a very nice feature to its develop branch. 
After a lot of work and effort, a new architecture was introduced to allow FORTE and 4DIAC to handle modularity in I/O. 
The new architecture was developed as a new process interface prepare for modularity in a very abstract way, 
making it very flexible such that all other process interfaces can be implemented using the new one. 
It also allows to keep old code working, meaning that is not mandatory for users to change to the new architecture.</p>

<p>Soon the complete information about the new architecture and how to use it will be uploaded to the documentation, 
making it easier for users to adapt to the new features. 
Stay tuned to the news and forum, because this is really good!</p>

<?php include 'greeting.html';?>