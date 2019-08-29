<?php printNewsEntryHeader(__FILE__, "GSoC Project - Final Report on Improving Dynamic Type Loading", "img/gsoc.svg"); ?>

<p>Hey All!</p>
<p>Here is the last update on my GSoC project. 
The last phase is now finished and we tried to finalize everything. 
With this last update, I want to give you an overview of everything that has been done and everything I learned throughout the project.</p>
 
<p>Before starting the project, I got myself familiar with the programming language Lua. 
Doing the Lua starting book and all examples within it. 
My first steps in the Eclipse 4diac IDE where to build a whole set of function blocks to test the code generator. 
Starting from simple functionality like conditional statements or assigments to calling structured text functions or adapters. 
I tried to cover nearly all functionality the Eclipse 4diac provides. 
Overall I created 35 different function blocks for testing the tool:</p>

<img src="news/figs/luaTestFBs.png" width="800"/>

<p>Afterwards, I already used these function blocks to identify what exactly was working in the code generator. 
I started creating a buglist in Bugzilla as a <a href="https://bugs.eclipse.org/bugs/showdependencytree.cgi?id=547884&hide_resolved=0">roadmap</a> on the bugs I found. 
After some minor bugfixes, I started fixing the bigger ones. e.g.
<ul>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=547888">Reworking the deploying mechanisms for function block types and adapter types</a></li>
	<li><a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=548768">Fixing adapter problems</a></li>
</ul>

<p>Unfortunately, I was not able to fix all identified bugs. 
Eventhough the project is finished with this month, I want to keep working with the Eclipse 4diac team and especially on the dynamic type loader.</p>
 
<p>To summarize my experience with GSoC and the Eclipse 4diac Team, it was incredible. 
Not only that I learned a new programming language, Lua, I got to know Xtend, an extension for the Java language itself and also an overlook of the C++ programming language. 
I also worked a lot in the Eclipse 4diac IDE itself, getting to know the whole programming environment. 
But the most important thing was to get to know an open and communicative community, that helped me with every problem I had. 
I had a really splendid time working on this project and want to thank you all for your assistance and help throughout the project.<br/> 
Thank you all!</p>

<p>Cheers,
	<br>Jan</p>
<br>




