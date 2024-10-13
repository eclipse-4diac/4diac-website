<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #5"); ?>

<p>
Update on what development happened across the Eclipse 4diac project in the week from October 04 to October 11, 2024.
</p>

<h3>Enhancements and Fixes in 4diac IDE</h3>
<ul>
  <li>New Features
    <ul>
      <li>Added new functions F_NOW and F_NOW_MONOTONIC for timing.
        <ul>
          <li>These functions return the current local date/time and monotonic clock value, respectively.</li>
        </ul>
      </li>
      <li>Added a Build 4diac Forte Launcher.
        <ul>
          <li>New launch configuration to build preconfigured 4diac FORTE using the cmake --build command.</li>
        </ul>
      </li>
    </ul>
  </li>

  <li>UI/UX Enhancements
    <ul>
      <li>FB Network Grid now follows IEC 61499 Coordinate System Resolution.
        <ul>
          <li>Grid resolution matches the size difference between pins, ensuring cleaner drawings and more precise FB positioning.</li>
	      <li>SetPosition now better handles screen deltas when moving blocks.</li>
          <li>Aligned Expanded SubApp content on the grid in the X direction.</li>
          <li>Reworked resizing of Groups, SubApps, and Comment Fields.
            <ul>
              <li>Improved handling of screen coordinates to reduce rounding errors and improve grid snapping.</li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>

  <li>Validation & Type Handling
    <ul>
      <li>Relaxed link creation type check for InOut variables.</li>
      <li>Validated if defining variable is of generic type for InOut variables.</li>
      <li>Used defining variable in type checks for InOut variables.</li>
      <li>Validated attributes on error marker interface.</li>
    </ul>
  </li>

  <li>Bug Fixes
    <ul>
      <li>Fixed dependency resolution during project creation.</li>
      <li>Fixed potential null pointer exception on library import.</li>
      <li>Fixed empty imported namespace for import normalizer in qualified scope.</li>
      <li>Fixed InOut parameter order for event accessors in forte_ng export.</li>
      <li>Fixed generation of initial values declaration in forte_ng export when only InOut variables exist.</li>
      <li>Fixed hover tooltip in ST editor.</li>
      <li>Fixed issue where only the last file (.cpp) passed to the reused CompareEditor opener was shown.</li>
      <li>Updated URI of resources on file changes in type entry.</li>
    </ul>
  </li>
  
  <li>Refactoring & Code Improvements
    <ul>
      <li>Deleted InterfaceDataTypeChange as it was redundant with UpdateFBTypeInterfaceChange.</li>
      <li>Implemented isValid method for UpdateFBTypeInterfaceChange.</li>
      <li>Renamed UpdateFBTypeInterfaceChange to AbstractCommandChange.</li>
      <li>Creation of supporting SWTBot class SWTBotECC (#377).
        <ul>
          <li>Moved related methods from Abstract4diacUITests, and adapted ECCEditorTests.</li>
        </ul>
      </li>
    </ul>
  </li>

</ul>



<h3>Enhancements and Fixes in 4diac FORTE</h3>
<ul>
  <li>New Features
    <ul>
      <li>Added new functions for retrieving current time and monotonic time.</li>
    </ul>
  </li>

  <li>Code Improvements
    <ul>
      <li>Added assembling and splitting modules to CMakeLists.
        <ul>
          <li>Assembling module includes various functions.</li>
          <li>Splitting module includes corresponding functions.</li>
        </ul>
      </li>
      <li>Added missing vector include for compiling OPC UA support with clang.</li>
    </ul>
  </li>

  <li>Consistency Changes
    <ul>
      <li>Lowercased selection folder to maintain consistency with the IDE.</li>
    </ul>
  </li>
</ul>

<h3>Enhancements and Fixes in 4diac FBE</h3>
<ul>
  <li>Fixed the verbose/non-parallel build switch ('-v').</li>
  <li>Updated FORTE to the latest version.</li>
  <li>Made the dynamic link bundling workaround more robust.</li>
</ul>


<p>Many thanks to all contributors for their work and their feedback!</p>

<?php include 'greeting.html';?>


