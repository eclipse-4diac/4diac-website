<html>
<head>
<?php include 'head.php';?>

<title>4diac Systems</title>
<meta name="description" content="4diac provides you with a set of example projects helping to learn IEC 61499 and 4diac. Furthernore these examples show different features of IEC 61499."> 
<meta name="keywords" content="application examples, tutorials, IEC 61499 applications">
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/sys.png"/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>


<section class="content">
	<h1>Example Projects</h1>
	
	<h2>Systems provided by 4diac</h2>
	<ul>
		<li>x+3</li>
		<li>mechanical press</li>
		<li>traffic light</li>
		<li>boiler control</li>
	</ul>
	
	<h2>IEC 61499 Applications</h2>
	<p><b>Programming Patterns for IEC 61499 @ <a href="http://www.fortiss.org">fortiss GmbH</a></b>
	<br>The Pick&amp;Place station from <a href="http://www.festo-didactic.com/de-de/lernsysteme/mechatronische-systeme-mps/mps-stationen">Festo</a> is used to explore programming patterns for the design of IEC 61499 compliant control applications. This station is composed of several components used to design reusable mechatronic entities for an hierarchical orchestration:
	<ul>
		<li>a conveyor with part detection for incoming parts and a light barrier for outgoing parts, which transports any part</li>
		<li>a separator with a part detector which separates parts in front of a handling unit</li>
		<li>a handling unit composed of a horizontal and a vertical axis as well as vacuum gripper to put an inlay into any part on the conveyor</li>
		<li>a status light which represents the state of the station</li>
	</ul>
	<figure class="single">
		<img src="img/pickNplace.png" width="350px" alt="pick and place station"/>
		<figcaption>Pick&amp;Place Station</figcaption>	
	</figure>
	<figure class="single">
		<img src="img/pickNplaceHierarchy.png" width="350px" alt="pick and place station hierarchy"/>
		<figcaption>Hierarchically structured Pick&amp;Place Station</figcaption>
	</figure></p>
	
	<p><b>... @ <a href="http://www.profactor.at/">PROFACTOR GmbH</a></b>
		<br>... 
	</p>
	
	<p><b>... @ <a href="http://www.acin.tuwien.ac.at/">TU Wien - ACIN</a></b>
			<br>... 
	</p>
	
	<p><b>Smart Grids @ <a href="http://www.ait.ac.at/departments/energy/smart-grids/">AIT - Energy Department</a></b>
	<br>This demonstrator covers the standard compliant implementation of Intelligent Electronic Devices (IED) in active power distribution networks (i.e. Smart Grids) and its validation. Availability and functionality of reliable and efficient electric energy systems are pre-requisites for economic and social welfare. The continuous growth of electric energy consumption as well as the upcoming large-scale integration of distributed and renewable energy production units results in a complex electric network. Current developments in the power and energy distribution domain lead to active distribution networks (i.e. Smart Grids) to overcome limitations and shortcomings of actual approaches. Several standardisation bodies, international organisations and various projects state that one major precondition for the realisation of the vision Smart Grids is the implementation of intelligent devices. In order to realise such intelligent devices several topics have to be taken into account. A key topic in the area of Smart Grids development is the standardisation issue. In order to develop interoperable solutions international standards have to be taken into account. The principal purpose of this work is therefore to discuss a simulation-based validation environment for testing the standard-based implementation of IEDs in Smart Grids. The control approach is based on the IEC 61499 reference model for distributed control systems whereas the whole automation and communication approach is based on the IEC 61850 standard for power system automation. The following figure provides an overview of the chosen approach.</p>
	<figure>
		<img src="img/smartGrid_01.png" alt="Standard Compliant Representation of Intelligent Electronic Devices (IED)"/>
		<figcaption>Standard Compliant Representation of Intelligent Electronic Devices (IED)</figcaption>
	</figure>
	<p>In order to test the standard-based implementation of IEDs in Smart Grid applications based on the IEC 61850 and IEC 61499 standard a suitable validation method is necessary. The real-time simulation method - especially Controller-Hardware-in-the-Loop CHIL experiments - seems to be a very promising approach. The main reason for using CHIL in this work is the fact that the control application is executed on the real controller hard- and software environment (e.g. one or more embedded IED controllers). With this approach, the control application can be tested in a more realistic use case scenario - compared to pure software simulation - during its development together with a simulated power network. The implemented CHIL framework on basis of the IEC 61499 solution is provided in the following figure.</p>
	<figure>
		<img src="img/smartGrid_02.png" alt="Controller-Hardware-in-the-Loop (CHIL) Validation Environment"/>
		<figcaption>Controller-Hardware-in-the-Loop (CHIL) Validation Environment</figcaption>
	</figure>
</section>

<?php include 'footer.php';?>

</body>

</html> 
