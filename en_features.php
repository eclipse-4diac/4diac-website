<html>
<head>
<?php include 'head.php';?>
<title>4DIAC Features</title>
</head>

<body>
<?php include 'header.html';?>

<section class="content">
	<h1>Features</h1>

<p>The 4DIAC project provides an industrial-grade open source infrastructure for distributed Industrial Process Measurement and Control Systems (IPMCS) based on the IEC 61499 standard. This infrastructure includes:<p/>


	<table>
		<tr>
			<td>
          <a href="en_rte.php">	RTE <img height="100px" src="img/rte-button.png" alt="4DIAC runtime environment (FORTE) provides a device indepent execution of IEC 61499 control application"/></a>
			</td>
			<td>
        <h2><a href="en_rte.php">FORTE (4DIAC-RTE)/></h2>
        <p>The 4DIAC runtime environment (4DIAC-RTE, FORTE) is a small portable implementation of an IEC 61499 runtime environment targeting small embedded control devices (16/32 Bit), implemented in C++. 
           It supports online-reconfiguration of its applications and the real-time capable execution of all function block types provided by the IEC 61499 standard.</p>
			</td>
		</tr>
	</table>


    the Eclipse based engineering tool called 4DIAC-IDE,
    the portable and efficient real-time capable runtime environment called FORTE,
    libraries providing commonly need application functionality (4DIAC-LIB), and
    selected sample applications showing the key features (4DIAC-Systems).


	<a href="en_ide.php">IDE
		<img height="100px" src="img/ide-button.png" alt="4DIAC-IDE provides a development environment for developing distributed industrial processes measurements and control systems"/>
		<span>Development Environment</span></a>
	<a href="en_lib.php">LIB
		<img height="100px" src="img/lib-button.png" alt="4DIAC's function block library provides you with a set of reusable function blocks reducing the effort of application development"/>
		<span>Library</span></a>
	<a href="en_sys.php">SYS
		<img height="100px" src="img/sys-button.png" alt="Examle systems showing the features of IEC 61499 and 4DIAC"/>
		<span>Systems</span></a>


	<p></p>
	<p>FORTE supports all IEC 61131-3 edition 2 elementary data-types, structures, and arrays. It provides a scalable architecture which allows FORTE to  adapt to the needs of your application. Applications can consist of any IEC 61499 element as basic function blocks (BFBs), composite function blocks (CFBs), service interface function blocks (SIFBs), adapters and subapplications. For connections between function blocks FORTE uses automatic and save castings (e.g., INT -> REAL). FORTE provides a flexible communication infrastructure via so called communication layers.</p>

	<table>
		<tr>
			<td><b>Supported communication layers</b>
				<ul>
					<li>FBDK ASN.1 encoding</li>
					<li>Ethernet</li>
					<li>Modbus TCP client</li>
					<li>OPC DA client</li>
					<li>MQTT using <a href="http://www.eclipse.org/paho/">Eclipse Paho</a></li>
				</ul>
			</td>
			<td><b>Supported Operating Systems</b>
				<ul>
					<li>Windows</li>
					<li>Posix: <a href="https://www.cygwin.com/">Cygwin</a>, Linux (i386, PPC, ARM)</li>
					<li><a href="http://www.digi.com/products/wireless-wired-embedded-solutions/software-microprocessors-accessories/software/netos">NET+OS 7</a></li>
					<li><a href="http://ecos.sourceware.org/">eCos</a></li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td><b>Supported Boards</b>
				<ul>
					<li><a href="http://www.digi.com/products/embedded-systems">Digi Connect ME</a> (ARM7)</li>
					<li><a href="http://mindstorms.lego.com/en-us/Default.aspx">Lego Mindstorms nxt</a> (ARM7)</li>
					<li><a href="http://www.kipr.org/products/cbc-robot-controller">KIPR's CBC v2</a> robot controller</li>
					<li><a href="http://www.raspberrypi.org/">RaspberryPI</a></li>
					<li><a href="http://beagleboard.org/black">BeagleBone Black</a></li>
				</ul>
			</td>
			<td><b>Supported Programmable Logic Controllers (PLCs)</b>
				<ul>
					<li><a href="http://www.bachmann.info/en/products/controller-system/">Bachmann electronic M1 PLC</a></li>
					<li><a href="http://global.wago.com/en/products/new-items/overview/pfc200-1.jsp">WAGO PFC200</a></li>
					<li>RaspberryPi PLC under construction</li>
					<li>B&R under construction</li>
				</ul>
			</td>
		</tr>
	</table>
</section>

<?php include 'footer.php';?>

</body>

</html> 
