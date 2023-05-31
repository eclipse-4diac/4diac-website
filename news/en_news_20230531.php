<?php printNewsEntryHeader(__FILE__, "You Can't Make an Omelet Without Breaking Eggs!"); ?>

<p>
For 4diac FORTE, API stability was always our major concern.  
However, this came at a cost (e.g., performance, memory usage, memory-safety). 
Therefore, we decided that we need to do a major rework of 4diac FORTE for the next release! 
</p>

<p>
The first results are already looking very promising.
We get twice the speed for FB algorithm execution and reduced the runtime overhead (event and connection processing) by 30%. 
We hope for more progress to come in the next weeks.
</p>

<p>
What does that mean for you?</p>
<ul>
  <li>For Basic, Simple, and Composite FBs; Adapter Interfaces; and Structured Data types: you simply need to regenerate the C++ code from within your IDE.</li>
  <li>For SIFBs: you need to regenerate the interface handling code and adjust the method signature of the executeEvent method</li>
</ul>

<p>Given the gains that you will get from this rework, we believe that this is a small price to pay. 
If you have any questions regarding this change, do not hesitate to contact us!
</p>

<?php include 'greeting.html';?>
