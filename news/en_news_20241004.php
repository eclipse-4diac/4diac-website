<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #4"); ?>

<p>
Update on what development happened across the Eclipse 4diac project in the week from September 27 to October 04, 2024.
</p>

<h3>Enhancements and Fixes in 4diac IDE</h3>
<ul>
  <li>Fixes
    <ul>
      <li>Fixed return type conversion in ST partitioner: Corrected an issue where the return type was set to ANY instead of null, causing problems during export.</li>
      <li>Fixed validation of assigned inputs from outside in ST editor.</li>
      <li>Fixed Quick-Fix to use the correct model element and ensure unsaved changes are preserved.</li>
      <li>Fixed issue where typing to invoke the new instance inserter caused the first character to be selected and overwritten.</li>
      <li>Fixed item reference for manifest update button.</li>
      <li>Fixed several issues with configured STRUCT_DEMUXERs, including connection parsing and type updates for visible outputs.</li>
      <li>Fixed GEF API change issues.</li>
      <li>Fixed sorting issue in System Navigator, preventing folders from collapsing on file rename.</li>
      <li>Fixed Quickfix for refreshing monitoring elements when no graphical editor is open.</li>
      <li>Fixed type class caching in FB type entry.</li>
      <li>Fixed plug type creation in adapter type entry.</li>
    </ul>
  </li>
  <li>Improvements
    <ul>
      <li>Added temporary flag for disabling the rename dialog.</li>
      <li>Changed UpdateFBInstanceChange to AbstractCommandChange.</li>
      <li>Added RampLimitFS FBType with setpoint ramping functionality, including event handling and value adjustments based on input parameters.</li>
      <li>Added Step mode to FollowConnectionHandlers.</li>
      <li>Added button to toggle Jump/Step mode for following connections.</li>
      <li>Improved System Navigator sorting for better folder handling.</li>
    </ul>
  </li>
  <li>Deprecations
    <ul>
      <li>Deprecated "editable" type in type entries in favor of using TypeEntry.copyType() or directly getting the type from an editor.</li>
    </ul>
  </li>
  <li>Other Updates
    <ul>
      <li>Updated E_STOPWATCH FBType with new copyright information.</li>
      <li>Updated to maintain expanded state of Demuxer property sheet tree viewer.</li>
      <li>Added separate last modification stamp for type editable in entries.</li>
      <li>Removed extra synchronized in type entry subclasses.</li>
    </ul>
  </li>
</ul>


<h3>Enhancements and Fixes in 4diac FORTE</h3>
<ul>
  <li>New Functionalities
    <ul>
      <li>Added RampLimitFS functionality for signal processing, including algorithms for fast/slow modes, step up/down actions, and loading setpoints.</li>
      <li>Added SCALE_LIM function block for signal processing with upper and lower limit scaling.</li>
      <li>Added SCALE function block for general signal processing.</li>
      <li>Added assembling functions:
        <ul>
          <li>ASSEMBLE_DWORD_FROM_BOOLS_fct</li>
          <li>ASSEMBLE_BYTE_FROM_QUARTERS_fct</li>
          <li>ASSEMBLE_WORD_FROM_BYTES_fct</li>
          <li>ASSEMBLE_DWORD_FROM_WORDS_fct</li>
        </ul>
      </li>
      <li>Added splitting functions:
        <ul>
          <li>SPLIT_DWORD_INTO_WORDS_fct</li>
          <li>SPLIT_BYTE_INTO_QUARTERS_fct</li>
          <li>SPLIT_BYTE_INTO_BOOLS_fct</li>
          <li>SPLIT_WORD_INTO_BYTES_fct</li>
        </ul>
      </li>
    </ul>
  </li>
  <li>Updates
    <ul>
      <li>Updated E_STOPWATCH FB with new events, handling logic, and state transitions, including algorithms for triggering and resetting the stopwatch.</li>
      <li>Updated Wago modules for current 4diac FORTE and changed WSTRING to STRING in Wago modules.</li>
    </ul>
  </li>
  <li>Fixes and Improvements
    <ul>
      <li>Fixed typo in slave macro and adjusted libraries for Wago.</li>
      <li>Called loadTerminalInformation after opening devices to display found devices with IDs.</li>
      <li>Cleaned up folders and removed non-modular Wago IOs.</li>
      <li>Migrated Wago modules.</li>
    </ul>
  </li>
</ul>


<p>Many thanks to all contributors for their work and their feedback!</p>

<?php include 'greeting.html';?>


