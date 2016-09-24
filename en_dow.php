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
	span a {
		text-decoration:none;
		color: black;
	}

	span ul, span li {
		list-style: none;
		padding-left:5px;
	}

	#nav li {
		padding: 2px 2px 2px 15px;
		cursor: default;
		background: url(img/fordiac16.png) no-repeat scroll 0px 10px transparent;
		background-size: 12px 12px;
		background-position: 0px 8px; 
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

		<table><tr>
		<td width="253" >
			<h2>4diac-IDE</h2>
			<i>development environment with FORTE executables</i>
			<h3>Latest Stable Release<br><i>4diac-IDE 1.8.x</i></h3>
			<ul>		
				<li>4diac-IDE 1.8 64-bit:<br/><i>requires Java 8 64-bit</i>
					<ul>
						<li><a href="https://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.8/4DIAC-IDE_1.8_win32.x86_64.zip/download">Windows 64-bit</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8/4diac-IDE_1.8_linux.gtk.x86_64.tar.gz/download">Linux 64-bit</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8/4diac-IDE_1.8_cocoa.x86_64.zip/download">OS X</a></li>
					</ul>
				</li>
				<li>4diac-IDE 1.8 32-bit:<br/><i>requires Java 8 32-bit</i>
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8/4diac-IDE_1.8_win32.x86.zip/download">Windows 32-bit</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8/4diac-IDE_1.8_linux.gtk.x86.tar.gz/download">Linux 32-bit</a></li>
					</ul>
				</li>
			</ul>	
	<span>
	<ul id="nav">		
		<li class="expand">old releases
			<ul>
				<li class="expand">4diac-IDE 1.8.x
				<ul>			
					<li class="expand">4diac-IDE 1.8RC3 64-bit:<br/>requires Java 8 64-bit
						<ul>
							<li><a href="https://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.8RC3/4DIAC-IDE_1.8RC3_win32.x86_64.zip/download">Windows 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC3/4diac-IDE_1.8RC3_linux.gtk.x86_64.tar.gz/download">Linux 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC3/4diac-IDE_1.8RC3_cocoa.x86_64.zip/download">OS X</a></li>
						</ul>
					</li>
					<li class="expand">4diac-IDE 1.8RC3 32-bit:<br/>requires Java 8 32-bit
						<ul>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC3/4diac-IDE_1.8RC3_win32.x86.zip/download">Windows 32-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC3/4diac-IDE_1.8RC3_linux.gtk.x86.tar.gz/download">Linux 32-bit</a></li>
						</ul>
					</li>	
					<li class="expand">4diac-IDE 1.8RC2 64-bit:<br/>requires Java 8 64-bit
						<ul>
							<li><a href="https://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.8RC2/4DIAC-IDE_1.8RC2_win32.x86_64.zip/download">Windows 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC2/4diac-IDE_1.8RC2_linux.gtk.x86_64.tar.gz/download">Linux 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC2/4diac-IDE_1.8RC2_cocoa.x86_64.zip/download">OS X</a></li>
						</ul>
					</li>
					<li class="expand">4diac-IDE 1.8RC2 32-bit:<br/>requires Java 8 32-bit
						<ul>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC2/4diac-IDE_1.8RC2_win32.x86.zip/download">Windows 32-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC2/4diac-IDE_1.8RC2_linux.gtk.x86.tar.gz/download">Linux 32-bit</a></li>
						</ul>
					</li>			
					<li class="expand">4diac-IDE 1.8RC1 64-bit:<br/>requires Java 8 64-bit
						<ul>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC1/4diac-IDE_1.8RC1_win32.x86_64.zip/download">Windows 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC1/4diac-IDE_1.8RC1_linux.gtk.x86_64.tar.gz/download">Linux 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC1/4diac-IDE_1.8RC1_cocoa.x86_64.zip/download">OS X</a></li>
						</ul>
					</li>
					<li class="expand">4diac-IDE 1.8RC1 32-bit:<br/>requires Java 8 32-bit
						<ul>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC1/4diac-IDE_1.8RC1_win32.x86.zip/download">Windows 32-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8RC1/4diac-IDE_1.8RC1_linux.gtk.x86.tar.gz/download">Linux 32-bit</a></li>
						</ul>
					</li>
					<li class="expand">4diac-IDE 1.8M1 64-bit:<br/>requires Java 8 64-bit
						<ul>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8M1/4diac-IDE_1.8M1_win32.x86_64.zip/download">Windows 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8M1/4diac-IDE_1.8M1_linux.gtk.x86_64.tar.gz/download">Linux 64-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8M1/4diac-IDE_1.8M1_cocoa.x86_64.zip/download">OS X</a></li>
						</ul>
					</li>
					<li class="expand">4diac-IDE 1.8M1 32-bit:<br/>requires Java 8 32-bit
						<ul>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8M1/4diac-IDE_1.8M1_win32.x86.zip/download">Windows 32-bit</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.8M1/4diac-IDE_1.8M1_linux.gtk.x86.tar.gz/download">Linux 32-bit</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="expand">4diac-IDE_1.7.x
			<ul>
				<li class="expand">4diac-IDE_1.7.3
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.3/4diac-IDE_1.7.3_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.3/4diac-IDE_1.7.3_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.3/4diac-IDE_1.7.3_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.3/4diac-IDE_1.7.3_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.3/4diac-IDE_1.7.3_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.7.2
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.2/4diac-IDE_1.7.2_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.2/4diac-IDE_1.7.2_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.2/4diac-IDE_1.7.2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.2/4diac-IDE_1.7.2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.2/4diac-IDE_1.7.2_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.7.1
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.1/4diac-IDE_1.7.1_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.1/4diac-IDE_1.7.1_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.1/4diac-IDE_1.7.1_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.1/4diac-IDE_1.7.1_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.1/4diac-IDE_1.7.1_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.7.0
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.0/4diac-IDE_1.7.0_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.0/4diac-IDE_1.7.0_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.0/4diac-IDE_1.7.0_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.0/4diac-IDE_1.7.0_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/4diac-IDE%201.7.0/4diac-IDE_1.7.0_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.7.0_RC2
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC2/4diac-IDE_1.7.0_RC2_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC2/4diac-IDE_1.7.0_RC2_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC2/4diac-IDE_1.7.0_RC2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC2/4diac-IDE_1.7.0_RC2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC2/4diac-IDE_1.7.0_RC2_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.7.0_RC1
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC1/4diac-IDE_1.7.0_RC1_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC1/4diac-IDE_1.7.0_RC1_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC1/4diac-IDE_1.7.0_RC1_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC1/4diac-IDE_1.7.0_RC1_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.7.0_RC1/4diac-IDE_1.7.0_RC1_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
			</ul>
		</li>
				<li class="expand">4diac-IDE_1.6.x
					<ul>
						<li class="expand">4diac-IDE_1.6.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE_1.6.2/4diac-IDE_1.6.2_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE_1.6.2/4diac-IDE_1.6.2_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE_1.6.2/4diac-IDE_1.6.2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE_1.6.2/4diac-IDE_1.6.2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE_1.6.2/4diac-IDE_1.6.2_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.6.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.1/4diac-IDE_1.6.1_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.1/4diac-IDE_1.6.1_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.1/4diac-IDE_1.6.1_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.1/4diac-IDE_1.6.1_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.1/4diac-IDE_1.6.1_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.6.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0/4diac-IDE_1.6.0_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0/4diac-IDE_1.6.0_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0/4diac-IDE_1.6.0_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0/4diac-IDE_1.6.0_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0/4diac-IDE_1.6.0_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.6.0_RC2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC2/4diac-IDE_1.6.0_RC2_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC2/4diac-IDE_1.6.0_RC2_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC2/4diac-IDE_1.6.0_RC2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC2/4diac-IDE_1.6.0_RC2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC2/4diac-IDE_1.6.0_RC2_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.6.0_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC1/4diac-IDE_1.6.0_RC1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC1/4diac-IDE_1.6.0_RC1_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.6.0_RC1/4diac-IDE_1.6.0_RC1_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
					</ul>
				</li>					
				<li class="expand">4diac-IDE_1.5.x
					<ul>
						<li class="expand">4diac-IDE_1.5.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.3/4diac-IDE_1.5.3.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.3/4diac-IDE_1.5.3_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.3/4diac-IDE_1.5.3_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.5.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.2/4diac-IDE_1.5.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.2/4diac-IDE_1.5.2_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.2/4diac-IDE_1.5.2_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.5.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.1/4diac-IDE_1.5.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.1/4diac-IDE_1.5.1_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.1/4diac-IDE_1.5.1_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.5.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0/4diac-IDE_1.5.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0/4diac-IDE_1.5.0_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0/4diac-IDE_1.5.0_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.5.0_RC2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0%20RC2/4diac-IDE_1.5.0_RC2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0%20RC2/4diac-IDE_1.5.0_RC2_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0%20RC2/4diac-IDE_1.5.0_RC2_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.5.0_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0%20RC1/4diac-IDE_1.5.0_RC1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0%20RC1/4diac-IDE_1.5.0_RC1_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.5.0%20RC1/4diac-IDE_1.5.0_RC1_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.4.x
					<ul>
						<li class="expand">4diac-IDE_1.4.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.2/4diac-IDE_1.4.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.2/4diac-IDE_1.4.2_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.2/4diac-IDE_1.4.2_MacOS_x86_64_experimental.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.4.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.1/4diac-IDE_1.4.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.1/4diac-IDE_1.4.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.4.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.0/4diac-IDE_1.4.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.4.0/4diac-IDE_1.4.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.3.x
					<ul>
						<li class="expand">4diac-IDE_1.3.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3.3/4diac-IDE_1.3.3.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3.3/4diac-IDE_1.3.3_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.3.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3.2/4diac-IDE_1.3.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3.2/4diac-IDE_1.3.2.zip/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.3.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3.1/4diac-IDE_1.3.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3.1/4diac-IDE_1.3.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.3.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3/4diac-IDE_1.3.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3/4diac-IDE_1.3.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.3.0_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3_RC1/4diac-IDE_1.3.0_RC1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.3_RC1/4diac-IDE_1.3.0_RC1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.2.x
					<ul>
						<li class="expand">4diac-IDE_1.2.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.2.1/4diac-IDE_1.2.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.2.1/4diac-IDE_1.2.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.2.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.2/4diac-IDE_1.2.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.2/4diac-IDE_1.2.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_1.x
					<ul>
						<li class="expand">4diac-IDE_1.1.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1.3/4diac-IDE_1.1.3.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1.3/4diac-IDE_1.1.3_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.1.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1.2/4diac-IDE_1.1.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1.2/4diac-IDE_1.1.2_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.1.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1.1/4diac-IDE_1.1.1.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1.1/4diac-IDE_1.1.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.1.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1/4diac-IDE_1.1.0.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.1/4diac-IDE_1.1.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_1.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.0/4diac-IDE_1.0.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%201.0/4diac-IDE_1.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4diac-IDE_0.x
					<ul>
						<li class="expand">4diac-IDE_0.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%200.3/4diac-IDE_0.3.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%200.3/4diac-IDE_0.3_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_0.3.RC2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%200.3%20RC2/4diac-IDE_0.3RC2_2008-12-23.exe/download">windows_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_0.3_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%200.3%20RC1/4diac-IDE_0.3RC1_2008-11-21.exe/download">windows_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_0.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%200.2/4diac-IDE_0.2.exe/download">windows_x86</a></li>
							</ul>
						</li>
						<li class="expand">4diac-IDE_0.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4diac-IDE/OldReleases/4diac-IDE%200.1/4diac-IDE_0.1.exe/download">windows_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul>
	</span>
	</td>
	<td width="253" style='padding:0px 30px 0px 30px'>
		<h2>4diac-RTE:</h2>	
		<i>source of FORTE compilable for your system</i>
		<h3>Latest Stable Release:</h3>
		<a href="https://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.8/FORTE_1.8.0.zip/download">FORTE_1.8</a>		
		<span>		
			<ul id="nav">
				<li class="expand">old releases
					<ul>
						<li class="expand">FORTE 1.8.x
							<ul>
							<li><a href="https://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.8/FORTE_1.8_RC3.zip/download">FORTE_1.8RC3</a></li>
							<li><a href="https://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.8/FORTE_1.8_RC2.zip/download">FORTE_1.8RC2</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.8/FORTE_1.8_RC1.zip/download">FORTE_1.8RC1</a></li>
							<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.8/FORTE_1.8_M1.zip/download">FORTE_1.8M1</a></li>
							</ul>
						</li>	
						<li class="expand">FORTE_1.7.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7.3.zip/download">FORTE_1.7.3</a></li>						
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7.2.zip/download">FORTE_1.7.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7.1.zip/download">FORTE_1.7.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7.0.zip/download">FORTE_1.7.0</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7_RC2.zip/download">FORTE_1.7_RC2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7_RC1.zip/download">FORTE_1.7_RC1</a></li>
							</ul>
						</li>
						<li class="expand">FORTE_1.6.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.6/FORTE_1.6.2.zip/download">FORTE_1.6.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.6/FORTE_1.6.1.zip/download">FORTE_1.6.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.6/FORTE_1.6.0.zip/download">FORTE_1.6.0</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.6/FORTE_1.6.0_RC2.zip/download">FORTE_1.6_RC2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.6/FORTE_1.6.0_RC1.zip/download">FORTE_1.6_RC1</a></li>
							</ul>
						</li>					
						<li class="expand">FORTE_1.5.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.5/FORTE_1.5.2.zip/download">FORTE_1.5.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.5/FORTE_1.5.1.zip/download">FORTE_1.5.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.5/FORTE_1.5.0.zip/download">FORTE_1.5.0</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.5/FORTE_1.5.0_RC2.zip/download">FORTE_1.5_RC2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.5/FORTE_1.5.0_RC1.zip/download">FORTE_1.5_RC1</a></li>
							</ul>
						</li>
						<li class="expand">FORTE_1.4.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.4/FORTE_1.4.2.zip/download">FORTE_1.4.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.4/FORTE_1.4.1.zip/download">FORTE_1.4.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.4/FORTE_1.4.zip/download">FORTE_1.4.0</a></li>
							</ul>
						</li>
						<li class="expand">FORTE_1.3.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.3/FORTE_1.3.3.zip/download">FORTE_1.3.3</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.3/FORTE_1.3.2.zip/download">FORTE_1.3.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.3/FORTE_1.3.1.zip/download">FORTE_1.3.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.3/FORTE_1.3.zip/download">FORTE_1.3.0</a></li>
							</ul>
						</li>
						<li class="expand">FORTE_1.2.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.2.1/FORTE_1.2.1.zip/download">FORTE_1.2.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.2/FORTE_1.2.zip/download">FORTE_1.2.0</a></li>
							</ul>
						</li>
						<li class="expand">FORTE_1.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.1.3/FORTE_1.1.3.zip/download">FORTE_1.1.3</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.1.2/FORTE_1.1.2.zip/download">FORTE_1.1.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.1.1/FORTE_1.1.1_src.zip/download">FORTE_1.1.1</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.1/FORTE_1.1.zip/download">FORTE_1.1.0</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%201.0/FORTE_1.0.zip/download">FORTE_1.0</a></li>
							</ul>
						</li>
						<li class="expand">FORTE_0.x
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%200.3.7/FORTE-0.3.7.zip/download">FORTE_0.3.7</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%200.3.6/FORTE-0.3.6.zip/download">FORTE_0.3.6</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%200.3.5/FORTE-0.3.5.zip/download">FORTE_0.3.5</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%200.3/forte-0.3.zip/download">FORTE_0.3</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%200.2/forte-0.2.zip/download">FORTE_0.2</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/OldReleases/FORTE%200.1/forte-0.1.zip/download">FORTE_0.1</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</span>
	</td>
		<td width="253">
		<h2>4diac-repositories:</h2>
		<i>sources for IDE, library, and systems</i>	
		<span>
			<ul id="nav">
				<li><a href="http://sourceforge.net/p/fordiac/fordiac-ide/ci/default/tree/">IDE source</a></li>
				<li><a href="http://git.eclipse.org/c/4diac/org.eclipse.4diac.forte.git">RTE source</a></li>
				<li><a href="http://sourceforge.net/p/fordiac/fordiac-lib/ci/default/tree/">library</a></li>
				<li><a href="http://sourceforge.net/p/fordiac/fordiac-systems/ci/default/tree/">systems</a>
					<i>(example projects)</i></li>
			</ul>
		</span>
	</td>
	</tr></table>

<h2>Showing that you are using 4diac</h2>	
<p>With these two stickers you can show the world that you are using 4diac. Put it on your web-page, flyers, controllers, laptops, t-shirts... 

<table><tr>
		<td width="380" >
		<img src="media/poweredby4diac_small_lowres.png" alt="powered by 4diac small" height="100"/>
		<br> <a href="media/poweredby4diac_small.svg">Powered by 4diac large SVG</a>
		<br> <a href="media/poweredby4diac_small.png">Powered by 4diac large PNG</a>
		</td>

		<td width="380" style='padding:0px 30px 0px 0px'>
		<img src="media/poweredby4diac_large_lowres.png" alt="powerd by 4daic large" height="100"/>
		<br> <a href="media/poweredby4diac_large.svg">Powered by 4diac large SVG</a>
		<br> <a href="media/poweredby4diac_large.png">Powered by 4diac large PNG</a>
		</td>
	</tr></table>


</section>
<?php include 'footer.php';?>

</body>

</html> 
