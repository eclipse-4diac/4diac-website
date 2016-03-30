<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4DIAC-IDE Spring-Cleaning
</div>
<div class="news">
	<span class="left"><?php $date="2016-03-30 17:15"; echo $date;?></span> 
	<span class="center"><img src="img/uws.png" alt="release" height="90"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>Last week the 4DIAC committers met to plan the migration of the 4DIAC-IDE for its initial commit to the Eclipse foundation. 
We identified that this is a great opportunity to perform a major clean-up of 4DIAC-IDE’s code. 
Especially the core data models turned out to be hard to maintain.  
When reworking the core data models we will not be able to provide a backward compatibility for the first time in 4DIAC’s history. 
In order to reduce the impact for our users we came up with the following plan:</p>
<ul>
 <li>The upcoming 1.8 release will still be based on the current data model and therefore fully backwards compatible. This will be the last release on Sourceforge.</li>
 <li>The cleaned-up 4DIAC-IDE will be the first 4DIAC Eclipse release with 1.9. 
     The clean-up is supposed to provide a better support for projects stored in IEC 61499-2 XML files and therefore allow to directly open projects developed with other IEC 61499 tools.</li>
</ul>

<p>With this plan we hope to perform the long needed modernization and clean-up of the 4DIAC-IDE. 
Furthermore this should allow us to fix some long known bugs (e.g., better subapplication support). 
In order that you can watch the required work and our progress we:</p>
<<ul>
  <li> Created a <a href="https://bugs.eclipse.org/bugs/showdependencytree.cgi?id=490601">bug list on 4DIAC’s bugzilla</a></li>
  <li> Made the <a href="https://sourceforge.net/p/fordiac/fordiac-ide">4DIAC-IDE mercurial</a> repository publicly visibly again</li>
</ul>

<p>If you have special needs and wishes for this migration please let us know in the <a href="https://dev.eclipse.org/mailman/listinfo/4diac-dev">4DIAC mailing list</a>).</p> 


<?php include 'greeting.html';?>

<p>P.S.: As part of our committer workshop we did a first clean-up sprint for the system configuration editor. 
Within a day we could get it working again and at the same time got rid of lots of old code. 
These are promising results for our spring-cleaning.</p><br/>
