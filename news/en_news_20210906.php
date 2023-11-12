<?php printNewsEntryHeader(__FILE__, "4diac 2.0.0 Release Feature Freeze Phase", "img/release.png"); ?>

<p>As every year, the beginning of September starts the feature freeze phase for the 4diac autumn release.
We have many new <a href="https://eclipse.dev/4diac/newandnoteworthy/2.0/index.php">features</a> and 
<a href="https://projects.eclipse.org/projects/iot.4diac/releases/2.0.0/bugs">bug fixes</a> in this release:</p>

<ul>
    <li><b>4diac IDE:</b>
        <ul>        	
        	<li>Reworked nearly all icons</li>
        	<li>Monitoring inside of typed subapps and composite FB instances</li>
        	<li>Monitoring of subapp interface pins</li>
        	<li>Error markers are created if FB types are missing or if pins of connections can not be found</li>
        	<li>Constants at FB inputs are validated whether they match the data type</li>
        	<li>Many smaller usability improvements</li>
        </ul>
    </li>
    
    <li><b>4diac FORTE:</b>
        <ul>
        	<li>Mostly stability improvements</li>
        </ul>
    </li>
</ul>

<p>More details will follow in the next weeks as separate news items.</p>


<p>We provide a nightly build update site which allows you to automatically update your 4diac IDE. 
Just add <br/><i>http://download.eclipse.org/4diac/nightly/update</i><br/>to your update sites. <p>
</p>

<?php include 'greeting.html';?>