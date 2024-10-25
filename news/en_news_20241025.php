<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #7"); ?>

<p>
Update on what development happened across the Eclipse 4diac project in the week from October 18 to October 25, 2024.
</p>

<h3>Enhancements and Fixes in 4diac IDE</h3>
    <ul>
      <li>Enhancements in Editor and UI functionality:
        <ul>
          <li>Use Frameworkutil to create a dictionary in FordiacImageURL.</li>
          <li>Adjusted column width in Imports-Table to occupy the entire width.</li>
          <li>Fixed UpdateFbInterfaceChange to prevent duplicated creation.</li>
          <li>Modified Imports Table column width to fill entire width.</li>
          <li>Enabled recursive folder creation in type entry.</li>
          <li>Resolved generic datatype for automatic SubApp pin creation.</li>
          <li>Fixed System Explorer root content and label provider setup.</li>
          <li>Ensured SubApp Type Pins table visibility settings.</li>
          <li>Prevented self-lookup in multi-page editor outline.</li>
          <li>Addressed attribute lookup in FB networks by linking to sub-importers.</li>
          <li>Enhanced reload mechanism for the attribute editor with varied composites.</li>
          <li>Implemented IPersistable in TypeEditorInput to restore editor states.</li>
          <li>Reworked DescriptionEditor to support all element types.</li>
        </ul>
      </li>
      <li>Structural Changes in Type Editing Infrastructure:
        <ul>
          <li>Moved get/setDocumentation methods to LibraryElement for broader use.</li>
          <li>Removed Title Label from StructComposite for flexibility in usage.</li>
          <li>Migrated AttributeTypeEditor and DataTypeEditor to the new Type Editing Infrastructure.</li>
          <li>Centralized type saving logic from FBTypeEditor to AbstractTypeEditor.</li>
          <li>Added enablement to the type editor page extension point.</li>
          <li>Extracted common type editor functionalities into AbstractTypeEditor class.</li>
        </ul>
      </li>
      <li>Refinements for Editing and Selection:
        <ul>
          <li>Enabled package refactoring with move-to-package feature.</li>
          <li>Improved System Explorer label providers to show accurate icons and warnings.</li>
          <li>Optimized outline selection response in FB Type Xtext editor tab.</li>
          <li>Enhanced marker management with direct thread updating under resource lock.</li>
        </ul>
      </li>
      <li>Error Handling and Quick-Fixes:
        <ul>
          <li>Resolved type-check error messages for InOut connections.</li>
          <li>Improved error messages and formatting preferences for quickfixes and refactorings.</li>
          <li>Refined handling of markers and resolution logic for configurable FBs.</li>
          <li>Fixed deadlock during type creation with quickfixes and array subscript access issues.</li>
        </ul>
      </li>
      <li>Tests and UI Enhancements:
        <ul>
          <li>Re-enabled Basic2FBNetwork tests with new movement and selection methods.</li>
          <li>Enhanced FB movement methods in SWTBot for readability in UI tests.</li>
        </ul>
      </li>
    </ul>


<p>Many thanks to all contributors for their work and their feedback!</p>

<?php include 'greeting.html';?>


