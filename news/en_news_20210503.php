<?php printNewsEntryHeader(__FILE__, "4diac 1.14.0 Released!", "img/release.png"); ?>


<p>We are very proud to announce the Eclipse 4diac 1.14.0 release!</p>

<p>With Eclipse 4diac 1.14.0 we provide you with a large set of improvements in 4diac IDE and 4diac FORTE: 
    <ul>
        <li><b>4diac IDE:</b>
            <ul>
                <li>System file content is shown in one single editor with bread-crumb navigation</li>
                <li>The infinite drawing canvas was replaced by an incremental growing canvas. This gives better feedback on the size of the network or ECC.</li>
                <li>Possibility of expanding subapps for showing subapp content in-line with its parent</li>
                <li>Inside untyped subapps the subapp's comment is shown at the top of the editing area</li>
                <li>Typed subapps can now contain untyped subapps</li>
                <li>The content of typed subapps can be watched as part of the instance similar to a composite fb in a dedicated viewer</li>
                <li>Parse errors are shown as errors in the problem view which is added to the system perspective</li>
                <li>A default CMakeList.txt file can be generated during export</li>
                <li>Reworked simulated device manager to better show currently running simulated devices</li>
                <li>Implicit upcast are now allowed during connection creation (e.g., INT to DINT)</li>
                <li>Transition conditions can now directly be edited in ECC graphics</li>
                <li>A struct can be created by selecting several interface elements of a subapp</li>
                <li>Many bug fixes and smaller improvements:
                    <ul>
                    	<li>Text labels in diagrams are not cut off any more</li>
                    	<li>Boot-file and FM generation is again available</li>
                    	<li>Improved automatic layout generation</li>
                    	<li>Modernized function block appearance with a drop shadow</li>
                    	<li>Several issues in the type library leading to broken projects and FBs</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><b>4diac FORTE:</b>
            <ul>
                <li>Improved timer handler to use less resources, which should lead to less jitter</li>
                <li>CMake modules have now an option to be enabled per default</li>
                <li>Several compile/portabilty issues where fixed: Modbus, Windows XP, ming64, Piface</li>
            </ul>
        </li>
    </ul>

<p>All in all we could address 150 issues in the work for the new Eclipse 4diac version. 
A full list of all bugs addressed in this release can be found on the <a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.14.0/bugs">1.14.0 release page</a>.

<p>As always please download, test, and report any issues. For users of the previous releases a simple Help -> Check of Updates should upgrade you to 1.14.0.</p>

<p>Cheers,
	<br>The 4diac Team</p>
	
<p>PS: With Eclipse 4diac 1.14.0 the 4diac IDE requires at least Java 11 installed on your machine!
If you download the official 4diac IDE package a correct Java version is already included.
Many thanks to the <a href="https://www.eclipse.org/justj/" >Eclipse JustJ project</a> for that support.</p>

<p>PPS: Windows 10 users:</b> <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=548443">Windows 10 Defender significantly slows down Eclipse and therfore also 4diac IDE</a>. 
    The reason is Windows 10 Defender scanning the JAR files.
    The problem has been reported to Microsoft <a href="https://aka.ms/AA67uk5">here</a>.
    Until then, a workaround to this problem is to add 4diac IDE root directory to Windows 10 Defender's exclusion list, detailed steps are shared <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=548443#c28">here</a>.
</p>
<p>Note: This is not just an Eclipse 4diac issue on Windows 10.</p>

<br/>