<html>
<head>
<?php include 'head.php';?>
<title>4diac LIB: 4diac's IEC 61499 Function Block Library</title>
<meta name="description" content="4diac's IEC 61499 function block (FB) library provides a large set of FBs helping you in developing your control applications. The library contains for example, FBs for event managment, configuring real-time execution behavior, all IEC 61131-3 FBs and functions, IO access, and communication handling."> 
<meta name="keywords" content="function blocks, event management, IEC 61131-3, OSCAT, IO handling, EthernetPOWERLINK, IEC 61499 real-time handling, communication">
<meta http-equiv='content-language' content='en-us'>
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/lib.png" alt="Overview on the different groups of function block libraries."/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>


<section class="content">
	<h1>4diac <i>LIB</i> &ndash; IEC 61499 Function Block Library</h1>
	<p>The 4diac function block library (4diac LIB) contains function blocks (FB) which are available on the 4diac FORTE and can therefore be used to create IEC 61499 compliant control applications.</p>

	<p>The IEC 61499 standard provides three types of FBs. Basic function blocks (BFBs), composite function blocks (CFBs) and service interface function blocks (SIFBs). Each FB contains an interface and a body. The interface provides connection points for data transmission as well as event triggers. The body describes the entire behavior of the FB. For CFBs this description is provided in terms of a FB-network (FBN), for BFBs in terms of an execution control chart (ECC) and for SIFBs in terms of a service sequence diagram which hides the entire code of the FB.</p>
	
	<img src="img/fbtypes.png" alt="The function block types of IEC 61499: composite function block, basic function block and service interface function block"/>
	
	<p>Besides these FB types also two grouping elements are provided. The grouping elements are adapters and subapplications. Adapters allow the grouping of interface elements within an own adapter type to reduce the amount of connections. Subapplications allow the grouping of FBs and therefore build FBNs. 4diac's FB library currently contains BFBs, CFBs, SIFBs and adapters which can be divided into the following subgroups.</p>
	<table>
		<tr>
			<td>
				<ul>
					<li>events</li>
					<li>io</li>
					<li>net</li>
					<li>rtevents</li>
					<li>reconfiguration</li>
					<li>utils</li>
				</ul>
			</td>
			<td>
				<ul>
					<li>FBRT</li>
					<li>IEC 61131-3</li>
					<li>OSCAT</li>
					<li>powerlink</li>
					<li>be-m1</li>
					<li>CBC</li>
				</ul>
			</td>
			<td>
				<ul>
					<li>Devices</li>
					<li>Resources</li>
					<li>Segments</li>
				</ul>
			</td>
		</tr>
	</table>	
</section>

<?php include 'footer.php';?>

</body>

</html> 
