<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #2"); ?>

Update on what development happened across the Eclipse 4diac project in the week from September 13 to September 20, 2024.

<h3>Enhancements and Fixes in 4diac IDE</h3>
<ul>
  <li>Function Block Changes and Updates
    <ul>
      <li>Added a new scaling function block with enhanced features
      </li>
      <li>Updated fieldbus signal conversion function blocks :Refined input/output handling and updated comments for clarity</li>
    </ul>
  </li>

  <li>Test and UI Enhancements
    <ul>
      <li>Restructured SWTBot UI tests for better modularity and migrated them to the new architecture</li>
      <li>Enabled the cancel button for long-running export operations</li>
      <li>Improved handling of export threads and fixed race conditions related to UI interactions</li>
    </ul>
  </li>

  <li>Fixes and Miscellaneous Updates
    <ul>
      <li>Fixed issue where internal variables were added multiple times to the watch list</li>
      <li>Enhanced property sheet to display detailed edit part information such as connections and instances, with sorting options</li>
      <li>Updated 4diac FORTE Exporter name to indicate version 3.x compliance</li>
      <li>Formatted numbers in ST validator messages to avoid locale-based issues</li>
      <li>Fixed race condition in ST editor related to the Xtext framework adapter handling</li>
      <li>Reworked deployment data unit tests and improved testing for parameter writes</li>
      <li>Fixed name casing for error type entries and improved annotation handling in the UI</li>
      <li>Improved VarInOut pin handling in SubApp editors, fixing deletion issues</li>
      <li>Fixed PackageInfoWidget’s annotation handling, avoiding unnecessary dirty states in editors</li>
      <li>Removed outdated markers from tests affected by server Maven version incompatibilities</li>
      <li>Replaced magic strings with constants in Import-AntTask and improved library dependency resolution</li>
      <li>Fixed handling of "Cancel" button in IProgressMonitor for model search operations</li>
    </ul>
  </li>
</ul>

<h3>Enhancements and Fixes in 4diac FORTE</h3>
<ul>
  <li>Improvements in Signal Processing Library
    <ul>
      <li>Renamed signal processing module files for consistency</li>
      <li>Updated include paths for generated source files to streamline references</li>
      <li>Refactored signal processing functions and interfaces
        <ul>
          <li>Removed unused variables and connections</li>
          <li>Updated function interfaces for value conversion</li>
          <li>Enhanced code readability and organization</li>
        </ul>
      </li>
    </ul>
  </li>
  <li>Bug Fixes and Compliance
    <ul>
      <li>Fixed incorrect time conversion in the faketime module</li>
      <li>Fixed rounding behavior for real to integer conversions to conform to IEEE 754 (IEC 60559) and IEC 61131-3 standards</li>
    </ul>
  </li>
</ul>



<?php include 'greeting.html';?>


