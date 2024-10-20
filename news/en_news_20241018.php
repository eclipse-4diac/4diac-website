<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #6"); ?>

<p>
Update on what development happened across the Eclipse 4diac project in the week from October 11 to October 18, 2024.
</p>

<h3>Enhancements and Fixes in 4diac IDE</h3>
<ul>
  <li>Bug Fixes
    <ul>
      <li>Fix deadlock when creating new type via quickfix</li>
      <li>Fix conflicts during nested unnecessary conversion quickfix</li>
      <li>Fix formatter preferences during quickfixes or refactoring</li>
      <li>Fix partial access on array subscript</li>
      <li>Fixed issue where Quick-Fix option did not show up in dirty Editor</li>
      <li>Fix cyclic resolution when creating resource descriptions</li>
      <li>Fix attribute lookup in importer</li>
      <li>Fix connection clipping with Insets for expanded SubappApp content</li>
      <li>Fix errors from consecutive type updates in open instance viewer</li>
    </ul>
  </li>
  
  <li>Improvements to Connection and XML Handling
    <ul>
      <li>Preserve Connection Position on Type Update</li>
      <li>Reconnect Connection Preserves Connection in XML File</li>
    </ul>
  </li>
  
  <li>Launcher and Device Management Enhancements
    <ul>
      <li>New Launcher that allows to Stop 4diac FORTEs</li>
      <li>Add device management executor service</li>
      <li>Refactor write FB parameter command in device management interactor</li>
      <li>Refactor monitoring commands in device management interactor</li>
    </ul>
  </li>
  
  <li>Evaluator and Debug Improvements
    <ul>
      <li>Add interface for evaluator debug target</li>
      <li>Refactor deployment FB evaluator to use new monitoring methods</li>
      <li>Add sanity checks for generic variables in evaluator</li>
    </ul>
  </li>
  
  <li>System Explorer and Editor Updates
    <ul>
      <li>Change system explorer navigation contents</li>
      <li>Show configurable FB / demux sections also in composite FBs</li>
    </ul>
  </li>
  
  <li>Quickfix and Refactoring Enhancements
    <ul>
      <li>Enable marker resolutions for configurable FBs</li>
      <li>Validate data type in configurable FBs</li>
      <li>Refactor marker resolutions (proper locking, command combination, save only when needed)</li>
    </ul>
  </li>
  
  <li>Timestamp and Timing Additions
    <ul>
      <li>Add startDate to timestamp function</li>
      <li>Add Timestamp</li>
      <li>Move E_STOPWATCH to timing folder</li>
    </ul>
  </li>
  
  <li>Miscellaneous Improvements
    <ul>
      <li>Reworked version info of assembling and splitting function blocks</li>
      <li>Added a check for error markers and disabled Map To option when there are errors</li>
      <li>Show full type name in missing type validation</li>
      <li>Move interpreter contribution from Debug to Run menu</li>
      <li>Refactor error handling of download runnable</li>
      <li>Remove obsolete delete system handler</li>
    </ul>
  </li>
</ul>




<h3>Enhancements and Fixes in 4diac FORTE</h3>
<ul>
  <li>New Function Blocks and Features
    <ul>
      <li>Added E_T_FF_SR_fbt function block, a mix between E_SR and E_T_FF</li>
      <li>Added startDate input</li>
      <li>Added TIMESTAMP_NS to the timing folder</li>
    </ul>
  </li>
  
  <li>Refactoring and Reorganization
    <ul>
      <li>Moved E_STOPWATCH into the timing folder</li>
    </ul>
  </li>

</ul>

<p>Furthermore the work on our new web-page is now in a stage where it soon can go live.</p>


<p>Many thanks to all contributors for their work and their feedback!</p>

<?php include 'greeting.html';?>


