<!DOCTYPE html>
<head>
<script type="text/javascript" src="jquery-1.6.2.js"></script>
<meta charset="ANSI">
<link rel="stylesheet" type="text/css" href="format.css">

<title>4DIAC-Downloads</title>
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
	a {
		text-decoration:none;
		color: black;
	}

	ul, li {
		list-style: none;
		padding-left:5px;
	}

	#nav li {
		padding: 2px 2px 2px 15px;
		cursor: default;
		background: url(img/fordiac16.png) no-repeat scroll 0px 10px transparent;
		background-size: 12px 12px;
		background-position: 0px 5px; 
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
<div>
	<span><b>4DIAC-IDE:</b>
	<br><i>development environment with FORTE executables</i>
	<ul id="nav">
		<li class="expand">4DIAC-IDE_1.7.x
			<ul>
				<li class="expand">4DIAC-IDE_1.7.1
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.1/4DIAC-IDE_1.7.1_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.1/4DIAC-IDE_1.7.1_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.1/4DIAC-IDE_1.7.1_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.1/4DIAC-IDE_1.7.1_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.1/4DIAC-IDE_1.7.1_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.7.0
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.0/4DIAC-IDE_1.7.0_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.0/4DIAC-IDE_1.7.0_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.0/4DIAC-IDE_1.7.0_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.0/4DIAC-IDE_1.7.0_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/4DIAC-IDE%201.7.0/4DIAC-IDE_1.7.0_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.7.0_RC2
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC2/4DIAC-IDE_1.7.0_RC2_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC2/4DIAC-IDE_1.7.0_RC2_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC2/4DIAC-IDE_1.7.0_RC2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC2/4DIAC-IDE_1.7.0_RC2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC2/4DIAC-IDE_1.7.0_RC2_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.7.0_RC1
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC1/4DIAC-IDE_1.7.0_RC1_win32.x86_64.zip/download">windows_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC1/4DIAC-IDE_1.7.0_RC1_win32.x86.zip/download">windows_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC1/4DIAC-IDE_1.7.0_RC1_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC1/4DIAC-IDE_1.7.0_RC1_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.7.0_RC1/4DIAC-IDE_1.7.0_RC1_cocoa.x86_64.zip/download">os_x86_64</a></li>
					</ul>
				</li>
			</ul>
		</li>
		<li class="expand">old releases
			<ul>
				<li class="expand">4DIAC-IDE_1.6.x
					<ul>
						<li class="expand">4DIAC-IDE_1.6.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE_1.6.2/4DIAC-IDE_1.6.2_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE_1.6.2/4DIAC-IDE_1.6.2_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE_1.6.2/4DIAC-IDE_1.6.2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE_1.6.2/4DIAC-IDE_1.6.2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE_1.6.2/4DIAC-IDE_1.6.2_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.6.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.1/4DIAC-IDE_1.6.1_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.1/4DIAC-IDE_1.6.1_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.1/4DIAC-IDE_1.6.1_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.1/4DIAC-IDE_1.6.1_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.1/4DIAC-IDE_1.6.1_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.6.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0/4DIAC-IDE_1.6.0_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0/4DIAC-IDE_1.6.0_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0/4DIAC-IDE_1.6.0_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0/4DIAC-IDE_1.6.0_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0/4DIAC-IDE_1.6.0_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.6.0_RC2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC2/4DIAC-IDE_1.6.0_RC2_win32.x86_64.zip/download">windows_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC2/4DIAC-IDE_1.6.0_RC2_win32.x86.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC2/4DIAC-IDE_1.6.0_RC2_linux.gtk.x86_64.tar.gz/download">linux_x86_64</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC2/4DIAC-IDE_1.6.0_RC2_linux.gtk.x86.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC2/4DIAC-IDE_1.6.0_RC2_cocoa.x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.6.0_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC1/4DIAC-IDE_1.6.0_RC1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC1/4DIAC-IDE_1.6.0_RC1_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.6.0_RC1/4DIAC-IDE_1.6.0_RC1_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
					</ul>
				</li>					
				<li class="expand">4DIAC-IDE_1.5.x
					<ul>
						<li class="expand">4DIAC-IDE_1.5.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.3/4DIAC-IDE_1.5.3.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.3/4DIAC-IDE_1.5.3_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.3/4DIAC-IDE_1.5.3_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.5.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.2/4DIAC-IDE_1.5.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.2/4DIAC-IDE_1.5.2_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.2/4DIAC-IDE_1.5.2_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.5.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.1/4DIAC-IDE_1.5.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.1/4DIAC-IDE_1.5.1_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.1/4DIAC-IDE_1.5.1_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.5.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0/4DIAC-IDE_1.5.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0/4DIAC-IDE_1.5.0_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0/4DIAC-IDE_1.5.0_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.5.0_RC2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0%20RC2/4DIAC-IDE_1.5.0_RC2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0%20RC2/4DIAC-IDE_1.5.0_RC2_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0%20RC2/4DIAC-IDE_1.5.0_RC2_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.5.0_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0%20RC1/4DIAC-IDE_1.5.0_RC1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0%20RC1/4DIAC-IDE_1.5.0_RC1_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.5.0%20RC1/4DIAC-IDE_1.5.0_RC1_MacOS_x86_64.zip/download">os_x86_64</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.4.x
					<ul>
						<li class="expand">4DIAC-IDE_1.4.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.2/4DIAC-IDE_1.4.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.2/4DIAC-IDE_1.4.2_Linux.tar.gz/download">linux_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.2/4DIAC-IDE_1.4.2_MacOS_x86_64_experimental.zip/download">os_x86_64</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.4.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.1/4DIAC-IDE_1.4.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.1/4DIAC-IDE_1.4.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.4.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.0/4DIAC-IDE_1.4.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.4.0/4DIAC-IDE_1.4.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.3.x
					<ul>
						<li class="expand">4DIAC-IDE_1.3.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3.3/4DIAC-IDE_1.3.3.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3.3/4DIAC-IDE_1.3.3_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.3.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3.2/4DIAC-IDE_1.3.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3.2/4DIAC-IDE_1.3.2.zip/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.3.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3.1/4DIAC-IDE_1.3.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3.1/4DIAC-IDE_1.3.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.3.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3/4DIAC-IDE_1.3.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3/4DIAC-IDE_1.3.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.3.0_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3_RC1/4DIAC-IDE_1.3.0_RC1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.3_RC1/4DIAC-IDE_1.3.0_RC1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.2.x
					<ul>
						<li class="expand">4DIAC-IDE_1.2.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.2.1/4DIAC-IDE_1.2.1.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.2.1/4DIAC-IDE_1.2.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.2.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.2/4DIAC-IDE_1.2.0.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.2/4DIAC-IDE_1.2.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_1.x
					<ul>
						<li class="expand">4DIAC-IDE_1.1.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1.3/4DIAC-IDE_1.1.3.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1.3/4DIAC-IDE_1.1.3_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.1.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1.2/4DIAC-IDE_1.1.2.zip/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1.2/4DIAC-IDE_1.1.2_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.1.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1.1/4DIAC-IDE_1.1.1.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1.1/4DIAC-IDE_1.1.1_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.1.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1/4DIAC-IDE_1.1.0.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.1/4DIAC-IDE_1.1.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_1.0
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.0/4DIAC-IDE_1.0.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%201.0/4DIAC-IDE_1.0_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="expand">4DIAC-IDE_0.x
					<ul>
						<li class="expand">4DIAC-IDE_0.3
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%200.3/4DIAC-IDE_0.3.exe/download">windows_x86</a></li>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%200.3/4DIAC-IDE_0.3_Linux.tar.gz/download">linux_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_0.3.RC2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%200.3%20RC2/4DIAC-IDE_0.3RC2_2008-12-23.exe/download">windows_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_0.3_RC1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%200.3%20RC1/4DIAC-IDE_0.3RC1_2008-11-21.exe/download">windows_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_0.2
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%200.2/4DIAC-IDE_0.2.exe/download">windows_x86</a></li>
							</ul>
						</li>
						<li class="expand">4DIAC-IDE_0.1
							<ul>
								<li><a href="http://sourceforge.net/projects/fordiac/files/4DIAC-IDE/OldReleases/4DIAC-IDE%200.1/4DIAC-IDE_0.1.exe/download">windows_x86</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</li>
	</ul></span>
	
	<span><b>4DIAC-RTE:</b>
	<br><i>source of FORTE compilable for your system</i>
	<ul id="nav">
				<li class="expand">FORTE_1.7.x
					<ul>
						<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7.1.zip/download">FORTE_1.7.1</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7.0.zip/download">FORTE_1.7.0</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7_RC2.zip/download">FORTE_1.7_RC2</a></li>
						<li><a href="http://sourceforge.net/projects/fordiac/files/FORTE/FORTE%201.7/FORTE_1.7_RC1.zip/download">FORTE_1.7_RC1</a></li>
					</ul>
				</li>
				<li class="expand">old releases
					<ul>
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
</div>
</section>

<?php include 'footer.html';?>

</body>

</html> 