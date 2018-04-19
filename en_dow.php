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
		color: orange;
	}
	
	ul a:hover{
		text-decoration:underline;
		color: orange;
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
	
	#expanded ul {
	    display: inline;
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
					<h2>4diac-ide</h2>
					<i>Development environment currently without 4diac-rte executables</i>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<h2>4diac-rte</h2>	
					<i>Sources of 4diac-rte compilable for your system.</i>
				</td>
				<td width="33%" style='padding-left:10px;'>
					<h2>4diac-repositories</h2>
					<i>Sources for ide, rte, and systems:</i>	
				</td>
			</tr>
			
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<!--p style="color:rgba(255,149,14,1.0);font-weight:bold;text-align:center;">4diac-ide 1.9.0 M2 release on Eclipse under construction</p>-->
					<ul id="nav">
						<!--li>Nightly Build</li-->
						<!--li>Update Site</li-->
						<li class="expanded" id="expanded">4diac-ide 1.9.0
							<ul>
								<li><a href="http://download.eclipse.org/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
								<li><a href="http://download.eclipse.org/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
								<li><a href="http://download.eclipse.org/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
								<li><a href="http://download.eclipse.org/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_win32.win32.x86.zip">Windows 32-bit</a></li>
								<li><a href="http://download.eclipse.org/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
							</ul>
						</li>
						<li class="expand">1.9.0 Milestones:
    						<ul id="nav">
        						<li class="expand">4diac-ide 1.9.0 RC3
        							<ul>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_win32.win32.x86.zip">Windows 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
        							</ul>
        						</li>
        						<li class="expand">4diac-ide 1.9.0 RC2
        							<ul>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_win32.win32.x86.zip">Windows 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
        							</ul>
        						</li>
        						<li class="expand">4diac-ide 1.9.0 RC1
        							<ul>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_win32.win32.x86.zip">Windows 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
        							</ul>
        						</li>
        						<li class="expand">4diac-ide 1.9.0 M3
        							<ul>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_win32.win32.x86.zip">Windows 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
        							</ul>
        						</li>
        						<li class="expand">4diac-ide 1.9.0 M2
        							<ul>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-win32.win32.x86.zip">Windows 32-bit</a></li>
        								<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
        							</ul>
        						</li>
    						</ul>
						</li>
					</ul>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<!--p style="color:rgba(255,149,14,1.0);font-weight:bold;text-align:center;">forte 1.9.0 M2 release on Eclipse under construction</p-->
					<ul id="nav">
						<li><a href="http://download.eclipse.org/4diac/releases/1.9/forte/forte-incubation_1.9.0.zip">4diac-rte 1.9.0 RC2</a></li>
						<li class="expand">1.9.0 Milestones:
    						<ul id="nav">
    							<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC3/forte/forte-incubation_1.9.0.RC3.zip">4diac-rte 1.9.0 RC2</a></li>
        						<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC2/forte/forte-incubation_1.9.0.RC2.zip">4diac-rte 1.9.0 RC2</a></li>
        						<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/RC1/forte/forte-incubation_1.9.0.RC1.zip">4diac-rte 1.9.0 RC1</a></li>
        						<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M3/forte/forte-incubation_1.9.0.M3.zip">4diac-rte 1.9.0 M3</a></li>
        						<li><a href="http://download.eclipse.org/4diac/milestones/1.9.0/M2/forte/forte-incubation_1.9.0.M2.zip">4diac-rte 1.9.0 M2</a></li>
    						</ul>
						</li>
					</ul>
				</td>
				<td width="33%" style='padding-left:10px; '>
					<ul id="nav">
						<li><a href="http://git.eclipse.org/c/4diac/org.eclipse.4diac.ide.git">ide source</a></li>
						<li><a href="http://git.eclipse.org/c/4diac/org.eclipse.4diac.forte.git">rte source</a></li>
					</ul>
				</td>
			</tr>
			
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					Pre-Eclipse releases can be found at 
					<a href="https://sourceforge.net/projects/fordiac/files/4DIAC-IDE/">4diac's Sourceforge page</a>.
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'> 
					Pre-Eclipse releases can be found at 
					<a href="https://sourceforge.net/projects/fordiac/files/FORTE/">4diac's Sourceforge page</a>.					
				</td>
				<td width="33%" style='padding-left:10px; '> 
				<p>Repositories still at Sourceforge:</p>
					<ul id="nav">
						<!--li><a href="http://sourceforge.net/p/fordiac/fordiac-lib/ci/default/tree/">library</a></li-->
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
