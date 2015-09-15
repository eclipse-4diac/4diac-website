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
          <a class="componentbutton" href="en_ide.php">IDE<img height="100px" src="img/ide-button.png" alt="4DIAC-IDE provides a development environment for developing distributed industrial processes measurements and control systems"/></a>
			</td>
			<td>
        <h2 class="featureh2"><a href="en_ide.php">4DIAC-IDE</a></h2>
        <p>The 4DIAC integrated development environment (4DIAC-IDE) is an extensible, IEC 61499 compliant engineering environment for distributed control applications. The modelled applications can be downloaded to distributed field devices according the means defined by the IEC 61499 standard. The hardware capability definition allows to model the control hardware and its interconnections through networks.</p>
			</td>
		</tr>

		<tr>
			<td>
          <a class="componentbutton" href="en_rte.php">	RTE <img height="100px" src="img/rte-button.png" alt="4DIAC runtime environment (FORTE) provides a device indepent execution of IEC 61499 control application"/></a>
			</td>
			<td>
        <h2 class="featureh2"><a href="en_rte.php">FORTE (4DIAC-RTE)</a></h2>
        <p>The 4DIAC runtime environment (4DIAC-RTE, FORTE) is a small portable implementation of an IEC 61499 runtime environment targeting small embedded control devices (16/32 Bit), implemented in C++. 
           It supports online-reconfiguration of its applications and the real-time capable execution of all function block types provided by the IEC 61499 standard.</p>
			</td>
		</tr>

		<tr>
			<td>
          <a class="componentbutton" href="en_lib.php">LIB<img height="100px" src="img/lib-button.png" alt="4DIAC's function block library provides you with a set of reusable function blocks reducing the effort of application development"/></a>
			</td>
			<td>
        <h2 class="featureh2"><a href="en_lib.php">4DIAC function block library (4DIAC-LIB)</a></h2>
        <p>The 4DIAC-LIB contains function blocks (FB) which are available on the FORTE and can therefore be used to create IEC 61499 compliant control applications.</p>
			</td>
		</tr>

		<tr>
			<td>
          <a class="componentbutton" class="specialgroup" href="en_sys.php">SYS<img height="100px" src="img/sys-button.png" alt="Example systems showing the features of IEC 61499 and 4DIAC"/></a>
			</td>
			<td>
        <h2 class="featureh2"><a href="en_sys.php">Example Projects</a></h2>
        <p>Example systems showing the features of IEC 61499 and 4DIAC.</p>
			</td>

	</table>

</section>

<?php include 'footer.php';?>

</body>

</html> 
