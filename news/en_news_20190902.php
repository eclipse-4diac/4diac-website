<?php printNewsEntryHeader(__FILE__, "Improved OPC UA support for 4diac"); ?>

<p>After some months of working, the improved OPC UA module for 4diac is now finally merged in the developed branch.</p>

<h3>Why change the OPC UA Module?</h3>

	<p>After working with OPC UA and real cases with different companies using different OPC UA stacks, we realized that the OPC UA module in FORTE wasn't reliable and often crashed, and wasn't easy to extend. Also, we noticed that other companies had the same problem. So we decided to make a deep clean-up of the OPC UA module and add the capabilities we found were needed.</p>

<h3>So... what's new?</h3>

<p>The changes were done in the FORTE code, and the main things include:</p>

<ul>
	<li>Client and server are completely separated. Using just clients capabilities won't start the server.</li>
	<li>When using the client, if the connection is lost, FORTE will reconnect.</li>
	<li>You can now look for nodes in remote server using not only the browsename, but also the Node ID.</li>
	<li>You can set a desired Node ID (and name) for the variables you create in your local server. (Numeric, String and Bytestring).</li>
	<li>You can easily integrate your own nodesets to FORTE's compilation.</li>
	<li>You can easily add your own types.</li>
	<li>Support of v0.3.0 and v1.0 versions of open62541.</li>
</ul>

<h3>But, how good is it actually?</h3>

<ul>
	<li>Before, each Function Block has its own thread. Now, not anymore, meaning a great improvement in performance.</li>
	<li>9 bugs were closed.</li>
	<li>9 4diac applications were developed that execute more than 1300 test on FORTE's code.</li>
	<li>More than 80% coverage.</li>
	<li>A CI (continuous integration) was set to execute all tests on each commit, using both branch versions of open62541.</li>
	<li>0 compilation warnings / 0 cppcheck warnings nor errors.</li>
</ul>

<h3>I like it already, how do I use it?</h3>

<p>You need to use the develop branch of FORTE. The usage has changed a little, but the documentation is already up <a href="https://www.eclipse.org/4diac/en_help.php?helppage=html/communication/opc_ua_version1.html" target="_blank">online</a>. The main changes are which Function Blocks are used for different OPC UA capabilites and how does the ID looks like.</p>

<p>So, please use it, test it and open bugs for it. And of course, if you want to contribute to it, please do it by pushing your changes to FORTE's branch "feature/MO44GA" which will trigger the CI.</p>

<?php include 'greeting.html';?>




