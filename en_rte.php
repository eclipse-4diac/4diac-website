<html>
<head>
<?php include 'head.php';?>
<title>4diac FORTE - The 4diac runtime environment</title>
<meta name="description" content="The 4diac runtime environment (4diac FORTE) is a small portable implementation of an IEC 61499 runtime environment targeting small embedded control devices (16/32 Bit), implemented in C++. It supports online-reconfiguration of its applications and the real-time capable execution of all function block types provided by the IEC 61499 standard. With that 4diac FORTE abstracts vendor and device specific features away allowing to run the same control applications  on any device."> 
<meta name="keywords" content="runtime environment, embedded devices, smart field devices, vendor neutral, c++, real-time execution, heterogenouse devices">
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/rte.png" alt="network of heterogenouse embedded control devices forming a distributed control system running IEC 61499 control applications"/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>


<section class="content">
	<h1>4diac <i>FORTE</i> &ndash; IEC 61499 Runtime Environment</h1>
	<p>The 4diac FORTE is a small portable implementation of an IEC 61499 runtime environment targeting small embedded control devices (16/32 Bit), implemented in C++. It supports online-reconfiguration of its applications and the real-time capable execution of all function block types provided by the IEC 61499 standard.</p>
	<p>4diac FORTE supports all IEC 61131-3 edition 2 elementary data-types, structures, and arrays. It provides a scalable architecture which allows 4diac FORTE to  adapt to the needs of your application. Applications can consist of any IEC 61499 element as basic function blocks (BFBs), composite function blocks (CFBs), service interface function blocks (SIFBs), adapters and subapplications. For connections between function blocks 4diac FORTE uses automatic and save castings (e.g., INT -> REAL). 4diac FORTE provides a flexible communication infrastructure via so called communication layers.</p>

	<table>
		<tr>
			<td><h2 class="h2twocollumntable">Supported communication layers</h2>
				<ul>
					<li>Ethernet (TCP/UDP)</li>
					<li>Ethernet PowerLink using <a href="http://sourceforge.net/projects/openpowerlink/">openPOWERLINK V1.8.0</a></li>
					<li>FBDK ASN.1 encoding</li>
					<li>Modbus TCP client using <a href="http://libmodbus.org/">libmodbus</a></li>
					<li>MQTT using <a href="http://www.eclipse.org/paho/">Eclipse Paho</a></li>
					<li>OPC UA using <a href="https://github.com/open62541/open62541">open62541</a></li>
					<li>OPC DA client using <a href="http://sourceforge.net/projects/opcclient/">OPC Client library release 0.4</a></li>
					<li>RS232</li>
				</ul>
			</td>
			<td><h2 class="h2twocollumntable">Supported Operating Systems</h2>
				<ul>
					<li><a href="http://ecos.sourceware.org/">eCos</a></li>
					<li><a href="http://www.digi.com/products/wireless-wired-embedded-solutions/software-microprocessors-accessories/software/netos">NET+OS 7</a></li>		
					<li>Posix: <a href="https://www.cygwin.com/">Cygwin</a>, Linux (i386, PPC, ARM)</li>
					<li><a href="https://kb.hilscher.com/display/RCX/rcX">rcX</a></li>
					<li><a href="http://www.windriver.com/products/vxworks/">VxWorks</a></li>
					<li><a href="https://www.sysgo.com/products/pikeos-hypervisor/">PikeOS</a></li>
					<li>Windows</li>
					<li>upcoming:
						<ul>
							<li><a href="http://www.freertos.org/">freeRTOS</a></li>
						</ul>
					</li>
				</ul> 
			</td>
		</tr>
		<tr>
			<td><h2 class="h2twocollumntable">Supported Boards</h2>
				<ul>
					<li><a href="http://beagleboard.org/black">BeagleBone Black</a></li>
					<li><a href="http://www.digi.com/products/embedded-systems">Digi Connect ME</a> (ARM7)</li>
					<li><a href="http://www.embrick.de/">emBRICK</a> for Raspberry PI and BeagleBone Black</li>
					<li><a href="http://www.kipr.org/products/cbc-robot-controller">KIPR's CBC v2</a> robot controller</li>
					<li><a href="http://mindstorms.lego.com/en-us/Default.aspx">Lego Mindstorms EV3</a> (ARM7)</li>					
					<li><a href="http://www.hilscher.com/">NXH 51-ETM</a></li>
					<li><a href="http://www.raspberrypi.org/">Raspberry PI</a></li>
				</ul>
			</td>
			<td><h2 class="h2twocollumntable">Supported Programmable Logic Controllers (PLCs)</h2>
				<ul>
					<li><a href="http://www.bachmann.info/en/products/controller-system/">Bachmann electronic M1 PLC</a></li>
					<li><a href="http://raspberry-sps.de/">Raspberry-SPS</a></li>
					<li><a href="http://global.wago.com/en/products/new-items/overview/pfc200-1.jsp">WAGO PFC200</a></li>
					<li><a href="http://www.microcontrol.net/en/products/control-systems/umic200/">MicroControl uMIC.200</a></li>
					<li><a href="https://www.insys-icom.de/icom-smartbox/container">icom MR-router series</a>
				</ul>
			</td>
		</tr>
	</table>
</section>

<?php include 'footer.php';?>

</body>

</html> 
