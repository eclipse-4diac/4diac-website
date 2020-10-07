<?php include '../nan_helper.php';
printNaNIDEHeader();
?>
	
<ul>
	<li><a href="#applicationEditing">Application Editing</a>
	<li><a href="#fbtEditing">Function Block Type Editing</a>
	<li><a href="#generalUpdates">General Updates</a>
</ul>
	
	
	
<h2 id="applicationEditing">Application Editing</h2>
<table class=nan>
	<tr>
		<td>
			Selection of graphical model elements
		</td>
		<td>
			Users reported that selections are poorly visible.
			Graphical elements are now also shown with a blue overlay and a blue border.
		</td>
	</tr>
	<tr>
		<td>
			Copy and Paste in interface editing tables
		</td>
		<td>
			Within the property sheets, interfaces of FBs can be edited in a table.
			Now it is possible to select one or multiple lines and copy-paste them (CTRL+C for copying, CTRL+V for pasting).
		</td>
	</tr>
	<tr>
		<td>
			Hover feedback
		</td>
		<td>
			Graphical elements are shown with a light-blue overlay upon hovering. 
		</td>
	</tr>
	<tr>
		<td>
			Typed/Untyped subapp conversion
		</td>
		<td>
			Untyped subapps can be conveniently transformed to typed subapps.
			A context menu entry "Save as subapplication type" is available.
			Also, typed subapps can be converted to untyped subapps.
			For this, a context menu "Detach from subapplication type" is available.
		</td>
	</tr>
	<tr>
		<td>
			Automatic Layouting
		</td>
		<td>
			Applications can now be layouted automatically.
		    The new feature is accessible via the context menu and utilizes the Eclipse Layout Kernel. 
		    The layouter can (and hopefully will) save you from the tedious task of cleaning up your applications.
		</td>
	</tr>
	<tr>
		<td>
			Model Validation
		</td>
		<td>
			Some potential issues in applications are automatically detected upon saving (UnreachableFB, DataInputMustHaveValue, FBCommentFieldMustHaveValue, TimeFormat, BoolFormat, AssociatedDataMustBeConfigured).
			Results are shown in the error view, where markers directly link to the problematic region in the application.
			The severity varies among these problems (Info, Warning, Error).
		</td>
	</tr>
	<tr>
		<td>
			Bookmarks
		</td>
		<td>
			For navigating large-scale applications, it is now possible to bookmark blocks. 
			They appear in the Bookmark view and can be selected from there.
			Double-clicking automatically reveals the selected FB in the application editor.
		</td>
	</tr>	
	<tr>
		<td>
			Structured Types
		</td>
		<td>
			Connections for adapters or pins with datatype Structured Type: shown as double-line to be better distinguishable.
			Two new blocks were added to the library: STRUCT_MUX and STRUCT_DEMUX can be used for (de)multiplexing individual data connections into Structured Types.
			For using them, please note that they need to be configured with the respective datatype in the property view.
			The datatype has to be available in the library.
		</td>
	</tr>
	<tr>
		<td>
			Property Section Redesign
		</td>
		<td>
			Some property sections were redesigned to better differentiate editable instance info and non-editable type data.
			Furthermore, typed subapps now have read-only sections for viewing their interface elements.
		</td>
	</tr>	
</table>	

<h2 id="fbtEditing">Type Editing</h2>
<table class=nan>
	<tr>
		<td>
			Managing Structured Types
		</td>
		<td>
		    Structured Types have already been supported by our runtime 4diac IDE. 
		    Now 4diac IDE can parse XML-Files that contain datatype files (*.dtp). 
		    A new datatype editor allows manipulating the Structured Type.
		    With a table layout and direct editing, it is almost self-explanatory and - hopefully - very easy to use. 
		    Of course, also creating new datatype files is possible.
		</td>
	</tr>
	<tr>
		<td>
			Using Structured Types
		</td>
		<td>
		    A new search field with autocompletion replaces the old dropdown for choosing a datatype.
		    The required datatype can be chosen from the suggestions of autocompletion.
		    If the name is unknown, a button leads to a selection dialogue displaying all elementary types and all Structured Types from the project.
		</td>
	</tr>
	<tr>
		<td>
			Model Validation of ECCs
		</td>
		<td>
		    Potential issues in ECCs were identified (SelfCycleMustBeGatedByEvent, TransitionLowerThanOne, TransitionHigherThanOne, UnreachableState, TerminalState, DeadState, UnusedEventInput, UnusedEventOutput, NoneTransitionWithoutCondition, GuardOnlyCycle).
		    The new constraints are automatically evaluated upon saving.
		    Results are shown in the error view.
		</td>
	</tr>
		<tr>
		<td>
			ECC Redesign
		</td>
		<td>
		    Transition conditions now have transparent background.
		    This allows creating compact ECCs where the transitions are still well visible.
		    Furthermore, the output event now has a red background in order to have consistent color coding (event pins are red). 
		</td>
	</tr>
	<tr>
		<td>
			Internal Variables for simple FB
		</td>
		<td>
		    A view for editing internal variables was added to the simple FB editor.
		</td>
	</tr>
	<tr>
		<td>
			Lorem ipsum
		</td>
		<td>
		    Lorem ipsum
		</td>
	</tr>
</table>

<h2 id="generalUpdates">General Updates</h2>

<table class=nan>
	<tr>
		<td>
			Update to Java 11
		</td>
		<td>
		    4diac IDE now requires Java 11.
		</td>
	</tr>
	<tr>
		<td>
			Update to Eclipse 2020-09
		</td>
		<td>
		    4diac IDE has been updated to use Eclipse Platform 2020-09.
		</td>
	</tr>
	<tr>
		<td>
			JRE 11 included
		</td>
		<td>
		    Utilizing <a href="https://www.eclipse.org/justj/">Eclipse JustJ</a> project, 4diac IDE is now coming with its own JRE.  
		</td>
	</tr>
	<tr>
		<td>
			 Automated Tests
		</td>
		<td>
			We have implemented unit tests for 42 actions that can be executed in 4diac IDE (e.g., renaming, change type of an element, inserting elements,...). 
			These tests are executed automatically whenever a code change is submitted to our code review system.
			Thus, we hope to reduce the number of bugs in 4diac IDE. 
		</td>
	</tr>
</table>


<?php printNaNEntryfooter()?> 