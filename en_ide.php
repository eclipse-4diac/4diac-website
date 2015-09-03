<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Open+Sans&subset=latin' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="format.css">
<title>4DIAC-IDE</title>
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/ide.png"/>
</section>

<section class="content">
	<h1>IEC 61499 Compliant Development Environment</h1>
	<p>The 4DIAC integrated development environment (4DIAC-IDE) is an extensible, IEC 61499 compliant engineering environment for distributed control applications. The modelled applications can be downloaded to distributed field devices according the means defined by the IEC 61499 standard. The hardware capability definition allows to model the control hardware and its interconnections through networks.</p>
	<p>The 4DIAC-IDE is based on the Eclipse framework, which allows an easy integration of other plug-ins to the 4DIAC-IDE providing new or extended functionality. IEC 61499 based systems follow an application centric design, which means that the application of the overall system is created at first. Each application is created by interconnecting the desired function blocks (FB) in terms of a function block network (FBN). As soon as the hardware structure is known it can be added to a project's system configuration and the already existing application can be distributed onto the available devices. The IDE provides the following features:</p>
	<table>
		<tr>
			<td>
				<ul class="text">
					<li><b>System Explorer:</b>
						<br>manage IEC 61499 projects which consist of applications, a system configuration and a project specific type library</li>
					<li><b>Application Editor:</b> 
						<br>modelling of IEC 61499 function block networks consisting of the type library's elements</li>
					<li><b>Hardware Editor:</b>
						<br>specification and parameterization of automation hardware by modelling of IEC 61499 devices</li>					
					<li><b>Type Editors:</b>
						<br>creation of Basic FBs (BFB), Composite FBs (CFB), Service Interface FBs (SIFB), and Adapters</li>
				</ul>
			</td>
			<td>
				<ul class="text">
					<li><b>Distribution Editor:</b> 
						<br>mapping of FBNs or single FBs to the specified resources</li>
					<li><b>Deployment:</b>
						<br>selective download of applications to their corresponding resources</li>
					<li><b>Monitoring and Debugging Functionalities:</b>
						<br>watch and force the values of interface elements as well as trigger events</li>
					<li><b>Testing Functionalities:</b>
						<br>test a single FB on its behavior either by manually setting data values and triggering events within the FBTester editor or by running a list of test cases specified through the service sequences of the specific FB within the FBTest editor</li>
				</ul>
			</td>
		</tr>
	</table>
	<img src="img/ide_screenshot.png" width="800px" alt="4DIAC-IDE: prototypic engineering environment for distributed control systems"/>
</section>

<?php include 'footer.php';?>

</body>

</html> 