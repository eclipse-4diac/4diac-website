<?php printNewsEntryHeader(__FILE__, "Final report on OCL 4 4diac Google Summer of Code 2020 Project", "img/gsoc.svg"); ?>

<p>Hi!</p>

<p>Here is the last update on my GSoC project. 
With this last update, I would like to give you an overview of everything that has been done and everything I learned during my <a href="https://wiki.eclipse.org/Eclipse_4diacWiki/Development/Detecting_Model_Inconsistencies_in_4diac_Models_with_OCL">GSoC project</a>.</p>

<p>Before starting the project, I got myself familiar with the IEC 61499 standard and the Ecore models of the 4diac IDE. 
My first steps in the Eclipse 4diac IDE were to create OCL constraints and intergrate them into the IDE. 
Starting from simple checks at the ECC level to creating more complex contraints at the Application level. 
Altogether, 16 constraints have been created:</p>
<ul>
	<li><b>ECC:</b> SelfCycleMustBeGatedByEvent, TransitionLowerThanOne, TransitionHigherThanOne, UnreachableState, TerminalState, DeadState, UnusedEventInput, UnusedEventOutput, NoneTransitionWithoutCondition, GuardOnlyCycle</li>

	<li><b>Application:</b> UnreachableFB, DataInputMustHaveValue, FBCommentFieldMustHaveValue, TimeFormat, BoolFormat, AssociatedDataMustBeConfigured</li>
</ul>	

<p>At the beginning of the project, I implemented a simple dialog window for displaying the results of the violated constraints. 
It was a preliminary prototype only for testing purposes. 
Later, we decided to improve the UI and use the Problems tab of Eclipse. 
The current implementation has several cool features:</p>
<ul>
	<li>Displaying description, resource, path, location and severity(Error, Warning, Info) of the problem</li>
	<li>Better Error Marker support: When the user double clicks on one of the lines in the Problems View, the framework automatically selects the corresponding model element on which the constraint is violated (at the ECC level).</li>
	<li>The automatic invocation of the OCL validation: When the user saves the currently edited model, the validation is automatically invoked.</li>
</ul>

<img alt="Screenshot of final results" width="700" src="news/figs/gsoc2020_final_screenshot.png"><br/>

<p>Unfortunately, I didn't have time to implement constraints on the Xtext side. 
Even though the project is finished with this month, I want to keep working with the Eclipse 4diac team. 
I would like to get familiar with the 4diac Xtext implementation and check whether it would be advantageous to use well-formedness rules there.</p>

<p>Finally, I would like to summarize my experience with GSoC and the 4diac team. 
I learned a lot during the summer, it was a very nice experience to get to know the IEC 61499 standard and infrastructure of the 4diac IDE. 
But the most important thing was to get to know an open and kind community, that helped me with every problem and question I had. 
Even though we could only communicate online, I had a great time working on this project and I want to thank Alois, Bianca, and Martin for the assistance and help throughout the project.</p>

<p>Cheers,
	<br>S&aacute;ndor</p>
<br/>

