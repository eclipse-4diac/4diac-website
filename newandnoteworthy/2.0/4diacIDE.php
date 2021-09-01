<?php include '../nan_helper.php';
printNaNIDEHeader();
?>
	
<ul>
	<li><a href="#applicationEditing">Application Editing</a>
	<li><a href="#fbtEditing">Function Block Type Editing</a>
	<li><a href="#monitoring">Monitoring</a>
	<li><a href="#generalUpdates">General Updates</a>
</ul>
	
<h2 id="applicationEditing">Application Editing</h2>
<table class=nan>
	<tr>
		<td>
			Refactoring: Cut/Paste for subapplications
		</td>
		<td>
			Dedicated features for moving blocks into a subapplication (and the other way round) have already been available.
			These features are now also triggered by invoking cut/paste if only a single hierarchy level is involved.
		</td>
	</tr>		
	<tr>
		<td>
			File Update Dialogue
		</td>
		<td>
			4diac IDE is shipped with the EGit-extension. 
			This helpful Git integration assists you in versioning IEC 61499-projects. 
			File updates from external sources (such as those from a Git repository) are now better handled by 4diac IDE.
			A dialoge notifies users of the applied changes and allows to choose, which action should be performed (e.g., reload editor).
		</td>
	</tr>	
	<tr>
		<td>
			Literal Validation
		</td>
		<td>
			Literals are now evaluated upon input (e.g., parameters for data pins). 
			Feedback is provided as a tooltip. 
		</td>
	</tr>
	<tr>
		<td>
			Auto-Layout
		</td>
		<td>
			Auto-Layout should now provide improved results.
		</td>
	</tr>
	<tr>
		<td>
			Refactoring
		</td>
		<td>
		    Lorem Ipsum
		</td>
	</tr>	
	<tr>
		<td>
			Bugfixes
		</td>
		<td>
		    The list of bugfixes is available in Bugzilla. 
		</td>	
	</tr>
</table>	

<h2 id="fbtEditing">Type Editing</h2>
<table class=nan>
	<tr>
		<td>
			Service Sequence Editor
		</td>
		<td>
		    Service Sequences describe the event and data flow at the interface of a Function Block. 
		    The respective editor was renewed and convenient table editing is now supported. 
		    The design was improved and the editing is now consistent to other editors.
		</td>
	</tr>
	<tr>
		<td>
			Interpreting Basic Function Block Types
		</td>
		<td>
			In addition to code generation, we are developing an interpreter to directly execute the model of a Basic Function Block. 
			A prototype is integrated in this release.
		</td>
	</tr>
	<tr>
		<td>
			Direct Edit for ECC Transitions
		</td>
		<td>
			Creating ECCs with 4diac IDE has never been easier! 
			The same convenient way of editing that you already know from event and algorithm selection within ECC actions, was added for ECC transitions. 
			It is now also possible to set the condition event and expression directly at the transition by simply double clicking on the transition's condition.  
		</td>
	</tr>	
	<tr>
		<td>
			File Update Dialogue
		</td>
		<td>
			The File refresh (see Application editing) is also available for type editors.
		</td>
	</tr>	
	<tr>
		<td>
			Background Canvas updated
		</td>
		<td> 
			The last release introduced a new modular canvas to improve the experience during drag'n'drop of Function Blocks, as well as during zooming. 
			The background of the FB interface editor now uses the minimally required background. 
		</td>
	</tr>
	<tr>
		<td>
			Literal Validation
		</td>
		<td>
			Literals are now evaluated upon input (e.g., initial values for data pins). 
			Feedback is provided as a tooltip.
		</td>
	</tr>	
	<tr>
		<td>
			Untyped subapplications
		</td>
		<td>
			It is now possible to integrate untyped subapplications into typed subapplications. 
			This should further allow a flexible application development and to help structuring IEC 61499 applications.
		</td>
	</tr>
	<tr>
		<td>
			Refactoring
		</td>
		<td>
		    Lorem Ipsum
		</td>
	</tr>	
</table>

<h2 id="monitoring">Monitoring</h2>
<table>
	<tr>
		<td>
			Monitoring in Instance Viewers
		</td>
		<td>
		    Monitoring has been brought back to instance viewers both for Subapplications and Composite Viewers.
		</td>
	</tr>	
	<tr>
		<td>
			Monitoring compound datatypes
		</td>
		<td>
			Compound datatypes (Structured types according to IEC 61131-3) were represented as a single line of text. 
			It was difficult to identify changes and to watch certain elements.
			In the Watches view, they are now represented as a tree.
		</td>
	</tr>
	<tr>
		<td>
			Monitoring subapplication pins
		</td>
		<td>
			Subapplications are only a structuring mechanism of the model and are therfore not present in the runtime.
			Virtual monitoring pins now allow to watch and force data and events also in the runtime.
		</td>
	</tr>
</table>


<h2 id="generalUpdates">General Updates</h2>

<table class=nan>
	<tr>
		<td>
			Update to Eclipse 2021-06
		</td>
		<td>
		    4diac IDE has been updated to use Eclipse Platform 2020-12.
		</td>
	</tr>
	<tr>
		<td>
			Icon Redesign
		</td>
		<td>
		    Users had reported that some icons were difficult to understand or looked alike. 4diac IDE 2.0.0 therefore has a large number of updated icons.
		</td>
	</tr>

</table>


<?php printNaNEntryfooter()?> 