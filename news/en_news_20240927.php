<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #3"); ?>

<p>
Update on what development happened across the Eclipse 4diac project in the week from September 20 to September 28, 2024.
</p>

<h3>Enhancements and Fixes in 4diac IDE</h3>
<ul>
  <li>Fixes
    <ul>
      <li>Fix THIS access in forte_ng export and ST editor</li>
      <li>Fix variable access for internal FBs in evaluator</li>
      <li>Fix result type of comparison with missing operand types in ST editor</li>
      <li>Fix result type of internal FB call in ST parser</li>
      <li>Fix null pointer caused by non-existing library</li>
      <li>Fix ClassCastException when opening ContextMenu on an errorMarker</li>
      <li>Fix type cast error when deleting a FBType</li>
      <li>Fixed label providers for Array variables</li>
      <li>Fixed CreateConnectionAtSubappInterface to also include array-datatype</li>
      <li>Fixed creation of pins with array-datatype when creating new SubApp</li>
      <li>Fixed update of Connection Label after expanding/collapsing a SubApp</li>
      <li>Fixed icons for SelectFBDialog in QuickFixOption</li>
      <li>Copying structs to other folder creates 2 identical structs (#514)</li>
      <li>Fix THIS access in forte_ng export and ST editor</li>
    </ul>
  </li>
  <li>Improvements
    <ul>
      <li>Reduce compiler warnings in 4diac IDE</li>
      <li>STOPWATCH: Add new events ET and RESET, update ECState positions, and implement reset functionality</li>
      <li>Refactor locking implementation in type entry to improve performance and avoid deadlocks</li>
      <li>Improvement of Layout of Table in LibrarySelection page</li>
      <li>Ignore dependencies internal to libraries</li>
      <li>Ant task to check for unused dependencies</li>
      <li>Add editor configuration in variable widget</li>
      <li>Use variable widget in launch configurations</li>
      <li>Recreated QuickFixWizard Dialog</li>
    </ul>
  </li>
  <li>Features
    <ul>
      <li>Added check to prevent ClassCastException</li>
      <li>Added support for copy and paste in tree nattable</li>
      <li>Add variable dialog for structured initial values in FB debug view</li>
      <li>Add variable dialog for structured initial values in graphical editors</li>
      <li>Add variable dialog for structured initial values in nat tables</li>
      <li>Add expand/collapse all in variable widget</li>
      <li>Add method to get children from variable in evaluator</li>
      <li>Add message for canceled export of single element</li>
      <li>Add message if cancel all button was used during export</li>
      <li>Changed RepairCommandHandler to QuickFixHandler</li>
      <li>Added new tests for variable operations</li>
    </ul>
  </li>
  <li>Refactorings
    <ul>
      <li>Cleanup for constructors of CreateInterfaceCommands</li>
      <li>Remove Main Code for Virtual Group Interface Experiment</li>
      <li>Refactoring of Strings for QuickFixWizard</li>
      <li>Replaced WSTRING with STRING in Wago FBs</li>
    </ul>
  </li>
  <li>Deprecations
    <ul>
      <li>Add deprecated annotation for searchApplication wrapper in ModelSearch</li>
    </ul>
  </li>
</ul>


<h3>Enhancements and Fixes in 4diac FORTE</h3>
<ul>
  <li>Features
    <ul>
      <li>Add generic event accessors to enable usage of network FBs as internal FBs</li>
    </ul>
  </li>
  <li>Improvements
    <ul>
      <li>Update compiler flags for ESP32 toolchains to remove deprecated declarations in C and C++ files</li>
    </ul>
  </li>
  <li>Cleanups
    <ul>
      <li>Clean main and init files across different architectures
        <ul>
          <li>Added missing flag for shared library</li>
          <li>Fixed Windows architecture declaration and cleaned up startuphook file</li>
          <li>Limited shared library test to only when FORTE is built as a shared library</li>
          <li>Moved signals hook to each architecture</li>
          <li>Exported Windows symbols for shared library</li>
        </ul>
      </li>
    </ul>
  </li>
</ul>

<p>Many thanks to all contributors for their work and their feedback!</p>

<?php include 'greeting.html';?>


