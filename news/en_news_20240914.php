<?php printNewsEntryHeader(__FILE__, "Eclipse 4diac Weekly #1"); ?>

<p>
Update on what development happened across the Eclipse 4diac project in the week from September 06 to September 13, 2024.
</p>

<h3>Enhancements and Fixes in 4diac IDE</h3>
        <ul>
            <li>Property Sheets
                <ul>
                    <li>Separated annotation model refresh in property sheets</li>
                    <li>Avoided removing and re-adding annotations during live validation</li>
                </ul>
            </li>
            <li>Export Functionality
                <ul>
                    <li>Disabled editing of the Message-Textfield in the export dialog</li>
                    <li>Added handling for AttributeDeclaration and AutomationSystem in export</li>
                    <li>Fixed "not responding" message on Windows during long-running exports</li>
                    <li>Updated types to be exported in SIFB exporter</li>
                    <li>Added export of global constant files</li>
                </ul>
            </li>
            <li>Evaluator and Conversion Fixes
                <ul>
                    <li>Fixed name collision between cached global variables in ST evaluator</li>
                    <li>Fixed initial values for sampling FB evaluator</li>
                    <li>Fixed comparison with negative zero for reals according to IEEE 754 standards</li>
                    <li>Fixed rounding mode for real to integer conversions to round towards the nearest even integer</li>
                </ul>
            </li>
            <li>UI and Testing Improvements
                <ul>
                    <li>Disallowed usage of XbaseGenerated annotation in Xtend compiler</li>
                    <li>Added struct initializer type specifier in ST parser</li>
                    <li>Added generic variable support in evaluator for derived types</li>
                    <li>Continued UI test architecture changes with new helper classes</li>
                    <li>Renamed variables in supporting bots for clarity</li>
                    <li>Created sub-packages for clearer UI test structure</li>
                    <li>Fixed static accesses and typos in tests</li>
                </ul>
            </li>
            <li>Miscellaneous
                <ul>
                    <li>Removed Xtend project configuration from ST evaluator plugin</li>
                    <li>Migrated ST evaluators from Xtend to Java</li>
                    <li>Changed isValid method in UntypedSubappPinChange</li>
                    <li>Added new menu entry for monitoring internal variables in simple and basic FB instances</li>
                    <li>Internal variable watches can now be removed only via the debug main menu</li>
                </ul>
            </li>
        </ul>


<h3>Enhancements and Fixes in 4diac FORTE</h3>
    <ul>
        <li>Powerlink Function Blocks
            <ul>
                <li>Updated powerlink FBs to be compatible with the latest FORTE version</li>
                <li>Reverted erroneous names and removed old powerlink FBs</li>
                <li>Added new powerlink FBs in a new structure</li>
                <li>Introduced automatic download of tinyxml and openPOWERLINK when needed</li>
                <li>Added abstraction layers for DI and DO powerlink nodes</li>
                <li>Included abstract FBs for analog input, output, and temperature input</li>
                <li>Added the X20DO9322 function block</li>
                <li>Added powerlink to system tests</li>
                <li>Downgraded openPOWERLINK to version 1.8.0 for OPC UA compatibility</li>
            </ul>
        </li>
        <li>General Improvements
            <ul>
                <li>Fixed parsing of structured values in ANY variant</li>
            </ul>
        </li>
        <li>OPC UA Cleanup
            <ul>
                <li>Removed raw pointers for RData and action info</li>
                <li>Removed and cleaned up various subscription and reference pointers</li>
            </ul>
        </li>
    </ul>

<p>Many thanks to all contributors for their work and their feedback!</p>

<?php include 'greeting.html';?>


