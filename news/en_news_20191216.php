<?php printNewsEntryHeader(__FILE__, "In-place Instance Creation"); ?>

<p>This is the second of a series of posts on bigger 4diac IDE UI changes originated in the recent usability studies and discussions at the 4days of 4diac summit 
(<a href="en_news.php#en_news_20191215">first post</a>).</p>

<p>While the type palette shown on the right side of our editors has the great the advantage that it is easily explore-able by new users. 
Also creating instances by drag and drop is a very common concept used in many tools. 
However when more and more types are added the palette navigation gets harder. 
Also the drag and drop creation leads to lots of mouse movements and gets tedious. 
Therefore we want to propose a new in-place type creation as shown in the following mock-up image:<br/>

<img alt="Mockup for an inplace instance creation" width="700" src="news/figs/inplacetypecreation.png"></p>

<p>The behavior is proposed as follows:</p>
<ul>
  <li>An double click the text field with the button to the right is shown</li>
  <li>Also initially a drop down list with the last 3 - 5 used types is shown</li>
  <li>This drop down list shows the type name maybe with type icon and followed by a dash the path and file name in italic and some lighter color (e.g., slightly grayish)</li>
  <li>When the user types something in the text field the drop down list is updated with types matching the search text</li>
  <li>Selecting a type from the list with arrows + enter or with a double click will create an instance of that type</li>
  <li>Clicking on the button right to the text field brings up the insert FB pop-up menu so that the user can easily explore the type library</li>
</ul>

<p>Furthermore we see the following extensions:</p>
<ul>
  <li>&lt;Ctrl + Left Click&gt; bring up the insert type pop-up menu</li>
  <li>If the text entered into the text box does not much a type create an untyped subapp with the given name. Not sure if this is a good idea.</li>
  <li>When the user starts typing and the mouse has not been moved beyond a certain threshold from the last left click position also bring up the type creation editor.</li>
</ul>

<p>A key question for us is if this concept can replace the type palette of the FB Network editor?</p>


<p>Please use <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=558379">Bug 558338</a> for feedback.</p>

<?php include 'greeting.html';?>
