<html>
<head>
<?php include 'head.php';?>
<title>4DIAC - The Open Source Environment for Distributed Industrial Automation and Control Systems</title>
<meta name="description" content="4DIAC is an open source PLC environment allowing to implement industrial control solutions in a vendor neutral way. 4DIAC implements IEC 61499 extending IEC 61131-3 with better support for controller to controller communication and dynamic reconfiguration."> 
<meta name="keywords" content="open source PLC, programmable logic controller, distributed control systems, networked embedded systems, distributed industrial process measurement and control systems, IEC 61499, IEC 61131-3, dynamic reconfiguration, industrial communication, industrie 4.0, smart manufacturing, controller to controller communication">
</head>

<body>
<?php include 'header.html';?>

<section class="image">
	<h1>IEC 61499 Implementation for Distributed <br>Devices of the Next Generation</br></h1>
</section>

<section class="news">
<?php 
	$files = array_reverse(glob('./news/*.php'));
?>
	<a href="">
		<svg width="40px" height="40px">
			<polygon points="10,0 30,0 20,20 30,40 10,40 0,20 10,0" style="fill:rgba(1,34,105,1.0);fill-rule:evenodd;" />
			Sorry, your browser does not support inline SVG.
		</svg>
	</a>
	<div class="news-item"><span></span><a href="en_news.php#<?php echo basename($files[0],".php");?>"><?php $lines = file($files[0]); echo $lines[1];?></a></div>
  <div class="news-item"><span></span><a href="en_news.php#<?php echo basename($files[1],".php");?>"><?php $lines = file($files[1]); echo $lines[1];?></a></div>
	<div class="news-item"><span></span><a href="en_news.php#<?php echo basename($files[2],".php");?>"><?php $lines = file($files[2]); echo $lines[1];?></a></div>
	<a href="">
		<svg width="60px" height="60px">
			<polygon points="10,0 30,0 40,20 30,40 10,40 20,20 10,0" style="fill:rgba(1,34,105,1.0);fill-rule:evenodd;" />
			Sorry, your browser does not support inline SVG.
		</svg>
	</a>
</section>

<section class="content">
	<a class="componentbutton" href="en_rte.php">RTE
		<img height="100px" src="img/rte-button.png" alt="4DIAC runtime environment (FORTE) provides a device indepent execution of IEC 61499 control application"/>
		<span>Runtime Environment</span></a>
	<a class="componentbutton" href="en_ide.php">IDE
		<img height="100px" src="img/ide-button.png" alt="4DIAC-IDE provides a development environment for developing distributed industrial processes measurements and control systems"/>
		<span>Development Environment</span></a>
	<a class="componentbutton" href="en_lib.php">LIB
		<img height="100px" src="img/lib-button.png" alt="4DIAC's function block library provides you with a set of reusable function blocks reducing the effort of application development"/>
		<span>Library</span></a>
	<a class="componentbutton" href="en_sys.php">SYS
		<img height="100px" src="img/sys-button.png" alt="Example systems showing the features of IEC 61499 and 4DIAC"/>
		<span>Systems</span></a>
</section>

<?php include 'footer.php';?>

</body>

</html> 
