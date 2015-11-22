<html>
<head>
<?php include 'head.php';?>
<title>FORTE - The 4DIAC runtime environment</title>
<meta name="description" content="The 4DIAC runtime environment (4DIAC-RTE, FORTE) is a small portable implementation of an IEC 61499 runtime environment targeting small embedded control devices (16/32 Bit), implemented in C++. It supports online-reconfiguration of its applications and the real-time capable execution of all function block types provided by the IEC 61499 standard. With that FORTE abstracts vendor and device specific features away allowing to run the same control applications  on any device."> 
<meta name="keywords" content="runtime environment, embedded devices, smart field devices, vendor neutral, c++, real-time execution, heterogenouse devices">
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/rte.png" alt="network of heterogenouse embedded control devices forming a distributed control system running IEC 61499 control applications"/>
</section>

<section class="content">
	<h1>IEC 61499 Runtime Environment</h1>
	<p>The 4DIAC runtime environment (4DIAC-RTE, FORTE) is a small portable implementation of an IEC 61499 runtime environment targeting small embedded control devices (16/32 Bit), implemented in C++. It supports online-reconfiguration of its applications and the real-time capable execution of all function block types provided by the IEC 61499 standard.</p>
	<p>FORTE supports all IEC 61131-3 edition 2 elementary data-types, structures, and arrays. It provides a scalable architecture which allows FORTE to  adapt to the needs of your application. Applications can consist of any IEC 61499 element as basic function blocks (BFBs), composite function blocks (CFBs), service interface function blocks (SIFBs), adapters and subapplications. For connections between function blocks FORTE uses automatic and save castings (e.g., INT -> REAL). FORTE provides a flexible communication infrastructure via so called communication layers.</p>

	<table>
		<tr>
			<td><h2 class="h2twocollumntable">Supported communication layers</h2>
				<ul>
					<li>FBDK ASN.1 encoding</li>
					<li>Ethernet (TCP/UDP)</li>
					<li>Modbus TCP client using <a href="http://libmodbus.org/">libmodbus</a></li>
					<li>OPC DA client using <a href="http://sourceforge.net/projects/opcclient/">OPC Client library release 0.4</a></li></li>
					<li>MQTT using <a href="http://www.eclipse.org/paho/">Eclipse Paho</a></li>
					<li>RS232</li>
					<li><a href="https://www.eclipse.org/eclipsescada/news/2014/08/29/wrapup__iot_top_level_project__syslog__relp___sfp__validation.html">EclipseSCADA SFP</a></li>
					<li>Ethernet PowerLink using <a href="http://sourceforge.net/projects/openpowerlink/">openPOWERLINK V1.8.0</a></li>
				</ul>
			</td>
			<td><h2 class="h2twocollumntable">Supported Operating Systems</h2>
				<ul>
					<li>Windows</li>
					<li>Posix: <a href="https://www.cygwin.com/">Cygwin</a>, Linux (i386, PPC, ARM)</li>
					<li><a href="http://www.digi.com/products/wireless-wired-embedded-solutions/software-microprocessors-accessories/software/netos">NET+OS 7</a></li>
					<li><a href="http://ecos.sourceware.org/">eCos</a></li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td><h2 class="h2twocollumntable">Supported Boards</h2>
				<ul>
					<li><a href="http://www.digi.com/products/embedded-systems">Digi Connect ME</a> (ARM7)</li>
					<li><a href="http://mindstorms.lego.com/en-us/Default.aspx">Lego Mindstorms nxt</a> (ARM7)</li>
					<li><a href="http://www.kipr.org/products/cbc-robot-controller">KIPR's CBC v2</a> robot controller</li>
					<li><a href="http://www.raspberrypi.org/">Raspberry PI</a><br/>
              Raspberry PI based PLCs:
              <ul>
					       <li><a href="http://www.conmeleon.org/">CONMELEON</a><br/>
                 <li><a href="http://raspberry-sps.de/">RASPBERRY SPS</a><br/>
              </ul>   
            </li>
					<li><a href="http://beagleboard.org/black">BeagleBone Black</a>
				</ul>
			</td>
			<td><h2 class="h2twocollumntable">Supported Programmable Logic Controllers (PLCs)</h2>
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
