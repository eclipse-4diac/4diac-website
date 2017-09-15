<html>
<head>
<?php include 'head.php';?>
<script type="text/javascript" src="jquery-1.6.2.js"></script>
<title>4diac-Downloads</title>
<meta name="description" content="Getting the latest version of the different components of 4diac."> 
<meta name="keywords" content="4diac-IDE, FORTE, source code">

<script type="text/javascript">
	$(document).ready(function() {
		$(".expand").click(function(e) {
			$(this).toggleClass("expanded");
			$(this).children("ul:first").slideToggle("300");
			e.stopPropagation();
		});	
	}); //$(document).ready
	</script>
	
	<style type="text/css">
	ul a {
		text-decoration:none;
		color: black;
	}

	ul, ul li {
		list-style: none;
		padding-left:5px;
	}

	#nav li {
		padding: 2px 2px 2px 15px;
		cursor: default;
		background: url(img/fordiac16.png) no-repeat scroll 0px 10px transparent;
		background-size: 12px 12px;
		background-position: 0px 8px; 
		cursor: pointer;
	}

	#nav ul {
		display: none;
	}

	#nav li.expand {
		background: url(img/arrow-down.png) no-repeat scroll 0px 10px transparent;
		background-position: 0px 8px; 
	}

	.expanded {
		background: url(img/arrow-up.png) no-repeat scroll 0px 10px transparent !important;
		background-position: 0px 8px; 
	}
	</style>
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/download.png"/>
</section>

<section class="content">
	<h1>Downloads</h1>

		<table>
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<h2>4diac-IDE 1.8.4</h2>
					<i>Development environment with FORTE executables</i>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<h2>4diac-RTE 1.8.4</h2>	
					<i>Sources of FORTE compilable for your system.</i>
				</td>
				<td width="33%" style='padding-left:10px;'>
					<h2>4diac-repositories</h2>
					<i>Sources for IDE, library, and systems:</i>	
				</td>
			</tr>
			
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<ul id="nav">
						<li style="color:rgba(255,149,14,1.0);font-weight:bold;">4diac-ide 1.9.0 M2 release on Eclipse under construction</li>
						<li><a href="https://sourceforge.net/projects/fordiac/files/4DIAC-IDE/">previous 4diac-ide versions on SF</a></li>
					</ul>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<ul id="nav">
						<li style="color:rgba(255,149,14,1.0);font-weight:bold;">forte 1.9.0 M2 release on Eclipse under construction</li>
						<li><a href="https://sourceforge.net/projects/fordiac/files/FORTE/">previous forte versions on SF</a></li>
					</ul>
				</td>
				<td width="33%" style='padding-left:10px; '>
					<ul id="nav">
						<li><a href="http://git.eclipse.org/c/4diac/org.eclipse.4diac.ide.git">IDE source</a></li>
						<li><a href="http://git.eclipse.org/c/4diac/org.eclipse.4diac.forte.git">RTE source</a></li>
						<li><a href="http://sourceforge.net/p/fordiac/fordiac-lib/ci/default/tree/">library</a></li>
						<li><a href="http://sourceforge.net/p/fordiac/fordiac-systems/ci/default/tree/">systems</a>
							<i>(example projects)</i></li>
					</ul>
				</td>
			</tr>
			
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<p style="font-size:10.5pt"><i>64-bit version requires Java 8 64-bit
					<br>32-bit version requires Java 8 32-bit</i></p>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'> </td>
				<td width="33%" style='padding-left:10px; '> </td>
			</tr>
			
</table>

<h1>Show your 4diac use</h1>	
<p>With these two stickers you can show the world that you are using 4diac. Put it on your web-page, flyers, controllers, laptops, t-shirts... 

<table><tr>
		<td >
			<img src="media/poweredby4diac_small_lowres.png" alt="powered by 4diac small" height="100"/>
		</td>
		<td style='padding:0px 30px 0px 10px'>
			<br> <a href="media/poweredby4diac_small.svg">Powered by 4diac small SVG</a>
			<br> <a href="media/poweredby4diac_small.png">Powered by 4diac small PNG</a>
		</td>

		<td>
			<img src="media/poweredby4diac_large_lowres.png" alt="powerd by 4daic large" height="100"/>
		</td>
		<td style='padding:0px 0px 0px 10px'>	
			<br> <a href="media/poweredby4diac_large.svg">Powered by 4diac large SVG</a>
			<br> <a href="media/poweredby4diac_large.png">Powered by 4diac large PNG</a>
		</td>
	</tr></table>


</section>
<?php include 'footer.php';?>

</body>

</html> 
