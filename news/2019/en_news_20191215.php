<?php printNewsEntryHeader(__FILE__, "Proposed New Project Layout"); ?>

<p>This is a start of a series of posts on bigger 4diac IDE UI changes originated in the recent usability studies and discussions at the 4days of 4diac summit.</p>

<p>When we started 4diac IDE we decided to treat an Eclipse project equally to an IEC 61499 system. 
This had several advantages (e.g., simple project tree, alignment of type lib to projects). 
However in the usability evaluations done over the last year we got the feedback that this design has several shortcomings. 
Therefore we want to propose to change the naming and presentation of projects and system such that one Eclipse project 
(i.e., a 4diac project) can have several systems, as shown in the mock-up picture below. 
Furthermore, the type library files and folders would be moved to a dedicated type-library folder.<br/>

<img alt="Proposed transformation of the project layout" width="700" src="news/figs/newprojectlayout.png"></p>

<p>This proposal has several advantages:</p>
<ul>
  <li>Unambiguous reuse of all project related Eclipse Platform features (e.g., import existing project into workspace)</li>
  <li>Several systems can share a common type library</li>
  <li>Basis for more advanced type-library concepts (e.g., linked read only elements)</li>
  <li>Better representation of none IEC 61499 files (e.g., documentation, virtual dns file, 4diac FORTE C++ source code)</li>
  <li>Simplification of some 4diac IDE code</li>
  <li>Can be the basis for some other usability improvements (see later posts)</li>
</ul>

<p>So far we have identified the following required changes:</p>
<ul>
  <li>System explorer needs to show files on root level, sort IEC 61499 system files to top followed by the type-library folder</li>
  <li>New 4diac Project Wizard creates: project, default system, default application, and the type-library in dedicated Type Library folder</li>
  <li>New System Wizard needs a selection list for 4diac Projects (similar how it is now done in the New Application Wizard)</li>
  <li>New Application Wizard the systems in the selection list need to be grouped into projects</li>
</ul>

<p>We know that this is quite a big change therefore we are actively asking for your feedback. 
We’ve created the <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=558338">Bug 558338</a> in our Bugzilla for collecting and discussing feedback.</p>

<p>Looking forward for your comments and ideas!</p>

<?php include 'greeting.html';?>
