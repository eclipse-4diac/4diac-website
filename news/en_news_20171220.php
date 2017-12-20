<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	On our way to 4diac 1.9.0: Milestone 2 Released!
</div>
<div class="news">
	<span class="left"><?php $date="2017-12-20 07:45"; echo $date;?></span> 
	<span class="center"><img src="img/release.png" alt="release" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>In our work on bringing 4diac to its next level we reached a next major milestone! We handled 70 issues for <i>4diac-ide</i> and 26 for <i>forte</i>.</p> 

<p>The highlights for <i>4diac-ide</i> are:</p>
<ul>
  <li>Support for typed and untyped subapps</li>
  <li>All code moved to Eclipse Foundation git repository</li>
  <li>Finished clean-up of deprecated UI model</li>
  <li>Lots of code clean-up and stabilisation of the new infrastructure</li>
</ul>

<p>The highlights for <i>forte</i> are:</p>
<ul>
  <li>First version of dynamically loadable types utilizing <a href="http://www.lua.org/">Lua</a></li>
  <li>First support for <a href="http://www.ros.org/">ROS</a><li>
  <li>Expanding and improving OPC UA support</li>
  <li>Reducing porting effort of forte</li>
</ul>

<p>With the next milestone planned for mid of January we want to finalize to open sub-app topics so that we can go into a final release phase in February.</p>
<?php include 'greeting.html';?>

