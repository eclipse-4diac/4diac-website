<?php printNewsEntryHeader(__FILE__, "4diac 1.11.0 Release is Ready for Download!", "img/release.png"); ?>

<p>We are very proud to announce the 4diac 1.11.0 release!</p>

<p>With this release we officially updated to <a href="https://www.eclipse.org/legal/epl-2.0/faq.php">Eclipse Public License, Version 2.0!</a>
   Apart from many bug fixes and improvements the main changes and new features in 4diac 1.11.0 are:</p>
<ul>
	<li><b>4diac IDE:</b>
		<ul>
			<li>Improved Lua code generation</li>
			<li>Fixes in the dark theme in the console and the algorithm editors</li>
			<li>Allow setting the font used in the graphical editors and better handling of IEC 61499-2 coordinate systems
			<li>Changed the default font to a mono-space font, where certain characters can be better distinguished (e.g., I &amp;l)</li>
			<li>Printing of diagrams</li>
			<li>Many usability improvements:
				<ul>
					<li>Several problems with copy/paste</li>
					<li>Simpler creation of states and actions with &lt;ctrl+left mouse click&gt; in the ECC editor</li>
					<li>Improved transition presentation and editing in the state property sheet</li>
					<li>Harmonized look and feel and improved handling of tables (e.g., tabbing through fields, look ahead search in selection boxes)</li>
					<li>Transition lines pass through the middle control point</li>
					<li>Provide mouse cursors feedback for indicating connection sources and destinations</li>
					<li>...</li>
				</ul>
			</li>
		</ul>
	</li>
	<li><b>4diac FORTE:</b>
		<ul>
			<li>Support for the <a href="https://www.arrowhead.eu/arrowheadframework/this-is-it">Arrowhead framework</a></li>
			<li>Completely reworked and improved OPC UA integration, update to <a href="https://open62541.org/">open62541 V1.0</a></li>
			<li>Migrated TIME function to NOW and NOW_MONOTONIC function and improved time conversion functions</li>
			<li>Several fixes in the dynamic type loading code</li>
			<li>Deprecate Eclipse Neo SCADA SFP support</li>
		</ul>
		</li>
	<li><b>4diac LIB:</b>
		<ul>
			<li>Set of test FBs and applications for testing the different code generators</li>
		</ul>
	</li>
</ul>

<p>A full list of all bugs addressed in this release can be found on the <a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.11.0/bugs">1.10.0 release page</a></p>

<p>As always please download, test, and report problems and bugs. 
For 1.9.x and 1.10.x users a simple <i><q>Help -> Check of Updates</q></i> 
should upgrade you to 1.11.0.</p>

<?php include 'greeting.html';?>
