<?php printNewsEntryHeader(__FILE__, "4diac 1.12.0 Released!", "img/release.png"); ?>

<p>We are very proud to announce the 4diac 1.12.0 release!</p>

<p>Apart from many bug fixes and improvements, we also modernized the design of Applications and the System Configuration. 
   We could address 108 issues in the work for the new 4diac version.
   The main changes and new features in 4diac 1.12.0 are:</p>
	<ul>
	    <li><b>4diac IDE:</b>
	        <ul>
	            <li>The main usability improvement in 1.12.0 is the <b>in-place instance creation</b>. 
	            This allows searching for FBs in the library quickly and inserting them. 
	            Try the feature: the window opens immediately when you double-click on the background 
	            of the Application editor.</li>
	            <li>We implemented key codes to improve your <b>navigation through large applications</b>. 
	            With CTRL+arrow keys you may now navigate through your Application. 
	            Additionally, the Page up/down key is now handled correctly. 
	            To improve horizontal scrolling, we offer Alt+Page Up/down. 
				Did you know that drag and drop with the middle mouse button can be used to navigate through the application?
				</li>
	            <li>After viewing the contents of a subapplication, one commonly needs to jump back to the application. 
	            For this use case, we implemented “Go to parent”, accessible via the context menu.</li>
	            <li>Working with subapplications is now more convenient. 
	            An untyped subapplication can be saved as Type via the context menu. 
	            Additionally, you may want to include variations to a Type. 
	            For this use case, we implemented the “Detach from subapplication Type”-feature, 
	            which converts a type to an untyped subapplication.</li>
	            <li>Many usability improvements:
	                <ul>
	                    <li>Bypass FB</li>
	                    <li>Follow Connection</li>
	                    <li>Reorganized context menu:
	                    The context menu was shortened and grouped logically.</li>
	                    <li>Follow Connection</li>
	                    <li>The positioning of elements was greatly improved. 
	                    Previously, scrolling and zooming was often handled incorrectly. 
	                    Creating a new subapp from existing FBs will now correctly place them in the top-left corner of the subapp. 
	                    Additionally, undo/redo of subapp creation correctly inserts the blocks at their previous position.
	                    </li>
	                </ul>
	            </li>
	            <li>The performance of loading and saving system configurations was improved so that 4diac IDE can now handle larger systems much better.</li>
	        </ul>
	    </li>
	    <li><b>4diac FORTE:</b>
	        <ul>
	            <li>Bit-wise access of ANY_BIT data types  (e.g., myWord.%X3)</li>
	            <li>Fixed memory leak in Lua integration when using variables of type STRING and WSTRING</li>
	            <li>Fixed several build issues with CMake</li>
	            <li>Fixed boolean IOs on Wago PLCs</li>
	            <li>Improved Arrowhead support</li>
	        </ul>
	        </li>
	</ul>

<p>A full list of all bugs addressed in this release can be found on the <a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.12.0/bugs">1.12.0 release page</a></p>

<p>As always please download, test, and report problems and bugs. 
For users of the previouse releases a simple <i><q>Help -> Check of Updates</q></i> 
should upgrade you to 1.12.0.</p>

<?php include 'greeting.html';?>
