<html>
<head>
<?php include 'head.php';?>
<script type="text/javascript" src="jquery-1.6.2.js"></script>
<title>4diac Downloads</title>
<meta name="description" content="Getting the latest version of the different components of 4diac."> 
<meta name="keywords" content="4diac IDE, 4diac FORTE, source code">

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

<section class="left">
 <!-- currently empty left section -->
</section>

<section class="content">
	<h1>Downloads</h1>

		<table>
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<h2>4diac IDE 2.0.1</h2>
					<i>Development environment without 4diac FORTE executables</i>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<h2>4diac FORTE 2.0.1</h2>	
					<i>Packaged source code and selected binaries of 4diac FORTE.</i>
				</td>
				<td width="33%" style='padding-left:10px;'>
					<h2>4diac Repositories</h2>
					<i>Sources for 4diac IDE, 4diac FORTE, and systems:</i>	
				</td>
			</tr>
			
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<ul id="nav">
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/4diac-ide/4diac-ide_2.0.1-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/4diac-ide/4diac-ide_2.0.1-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/4diac-ide/4diac-ide_2.0.1-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
					</ul>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<ul id="nav">
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.1.zip">Source</a></li>
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.1.linux.x86_64.zip">Linux x86 64-bit</a></li>
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.1.linux.arm.zip">Linux ARM</a></li>
						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.1.win32.zip">Windows</a></li>
					</ul>
				</td>
				<td width="33%" style='padding-left:10px; '>
					<ul id="nav">
						<li><a href="https://git.eclipse.org/c/4diac/org.eclipse.4diac.ide.git">4diac IDE source</a></li>
						<li><a href="https://git.eclipse.org/c/4diac/org.eclipse.4diac.forte.git">4diac FORTE source</a></li>
						<li><a href="https://git.eclipse.org/c/4diac/org.eclipse.4diac.examples.git">4diac example systems</a></li>
						<li><a href="https://github.com/eclipse/4diac-website">4diac website</a></li>
					</ul>
				</td>
			</tr>
			
			<tr>
				<td width="33%" style='padding-right:10px; border-right:2px solid rgba(255,149,14,1.0);'>
    				<ul id="nav">
    					<li class="expand">Old 4diac IDE releases
    						<ul id="nav">
    							<li class="expand">2.0 Releases
            						<ul id="nav">
    									<li class="expand">4diac IDE 2.0.0
				    						<ul id="nav">
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/4diac-ide/4diac-ide_2.0.0-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/4diac-ide/4diac-ide_2.0.0-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/4diac-ide/4diac-ide_2.0.0-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
                    					</li>
                					</ul>
    							</li>
    							<li class="expand">1.14 Releases
            						<ul id="nav">
		    							<li class="expand">4diac IDE 1.14.0
				    						<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/4diac-ide/4diac-ide-incubation_1.14.0-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/4diac-ide/4diac-ide-incubation_1.14.0-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/4diac-ide/4diac-ide-incubation_1.14.0-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
                    					</li>
                					</ul>
    							</li>    						
    							<li class="expand">1.13 Releases
            						<ul id="nav">
		    							<li class="expand">4diac IDE 1.13.1
											<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/4diac-ide/4diac-ide-incubation_1.13.1-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/4diac-ide/4diac-ide-incubation_1.13.1-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/4diac-ide/4diac-ide-incubation_1.13.1-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
            							</li>           						
		    							<li class="expand">4diac IDE 1.13.0            						
											<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/4diac-ide/4diac-ide-incubation_1.13.0-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/4diac-ide/4diac-ide-incubation_1.13.0-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/4diac-ide/4diac-ide-incubation_1.13.0-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
										</li>
									</ul>    						
    							</li>
    							<li class="expand">1.12 Releases
            						<ul id="nav">
		    							<li class="expand">4diac IDE 1.12.2            						
											<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.2-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.2-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.2-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
            							</li>            						
		    							<li class="expand">4diac IDE 1.12.1            						            						
            						   		<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.1-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.1-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.1-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
            							</li>            						
		    							<li class="expand">4diac IDE 1.12.0            						
                                    		<ul id="nav">
                                    			<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.0-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                                    			<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.0-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                                    			<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/4diac-ide/4diac-ide-incubation_1.12.0-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                                    		</ul>
    									</li>
    								</ul>
								</li>
    							<li class="expand">1.11 Releases
            						<ul id="nav">
		    							<li class="expand">4diac IDE 1.11.2            						
	    	        						<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.2-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.2-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.2-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
                    					</li>
		    							<li class="expand">4diac IDE 1.11.1            						
	    	        						<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.1-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.1-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.1-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
                    					</li>
            							<li class="expand">4diac IDE 1.11.0            						
                        					<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.0-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.0-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/4diac-ide/4diac-ide-incubation_1.11.0-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
                    					</li>
                					</ul>
            					</li>
    							<li class="expand">1.10 Releases
            						<ul id="nav">
            							<li class="expand">4diac IDE 1.10.3            						
											<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.3-linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.3-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.3-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.3-win32.win32.x86.zip">Windows 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.3-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
            								</ul>
        								</li>
            							<li class="expand">4diac IDE 1.10.2
                        					<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.2_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.2_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.2_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.2_win32.x86.zip">Windows 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.2_win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
	            						</li>                                    						
            							<li class="expand">4diac IDE 1.10.1
                							<ul id="nav">
												<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.1_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.1_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.1_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.1_win32.x86.zip">Windows 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.1_win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
	            						</li>                                    						
            							<li class="expand">4diac IDE 1.10.0
                							<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.0_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.0_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.0_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.0_win32.x86.zip">Windows 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/4diac-ide/4diac-ide-incubation_1.10.0_win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>
	            						</li>
                    					<li class="expand">1.10.0 Milestones
                    						<ul id="nav">
                        						<li class="expand">4diac IDE 1.10.0 RC2
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/4diac-ide/4diac-ide-incubation_1.10.0.RC2_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/4diac-ide/4diac-ide-incubation_1.10.0.RC2_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/4diac-ide/4diac-ide-incubation_1.10.0.RC2_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/4diac-ide/4diac-ide-incubation_1.10.0.RC2_win32.win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/4diac-ide/4diac-ide-incubation_1.10.0.RC2_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                        						<li class="expand">4diac IDE 1.10.0 RC1
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/4diac-ide/4diac-ide-incubation_1.10.0.RC1_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/4diac-ide/4diac-ide-incubation_1.10.0.RC1_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/4diac-ide/4diac-ide-incubation_1.10.0.RC1_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/4diac-ide/4diac-ide-incubation_1.10.0.RC1_win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/4diac-ide/4diac-ide-incubation_1.10.0.RC1_win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                    						</ul>
                						</li>
            						</ul>
        						</li>
    						    <li class="expand">1.9 Releases
            						<ul id="nav">
            							<li class="expand">4diac IDE 1.9.1
                        					<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.1_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.1_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.1_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.1_win32.win32.x86.zip">Windows 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.1_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        					</ul>            							
            							</li>
            						    <li class="expand">4diac IDE 1.9.0
                    						<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_win32.win32.x86.zip">Windows 32-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/4diac-ide/4diac-ide-incubation_1.9.0_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                    						</ul>
                						</li>
             							<li class="expand">1.9.0 Milestones
                    						<ul id="nav">
                        						<li class="expand">4diac IDE 1.9.0 RC3
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_win32.win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC3/4diac-ide/4diac-ide-incubation_1.9.0.RC3_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                        						<li class="expand">4diac IDE 1.9.0 RC2
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_win32.win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC2/4diac-ide/4diac-ide-incubation_1.9.0.RC2_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                        						<li class="expand">4diac IDE 1.9.0 RC1
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_win32.win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC1/4diac-ide/4diac-ide-incubation_1.9.0.RC1_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                        						<li class="expand">4diac IDE 1.9.0 M3
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_win32.win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M3/4diac-ide/4diac-ide-incubation_1.9.0.M3_win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                        						<li class="expand">4diac IDE 1.9.0 M2
                        							<ul>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-linux.gtk.x86.tar.gz">Linux 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-linux.gtk.x86_64.tar.gz">Linux 64-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-macosx.cocoa.x86_64.dmg">Mac OS X</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-win32.win32.x86.zip">Windows 32-bit</a></li>
                        								<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M2/4diac-ide/4diac-ide-incubation_1.9.0.M2-win32.win32.x86_64.zip">Windows 64-bit</a></li>									
                        							</ul>
                        						</li>
                    						</ul>
                						</li>
            						</ul>
        						</li>
        						<li class="expand">Pre-Eclipse releases can be found at <a href="https://sourceforge.net/projects/fordiac/files/4DIAC-IDE/">4diac's Sourceforge page</a>.</li>        						
    						</ul>
    					</li>
					</ul>
				</td>
				<td width="33%" style='padding-right:10px; padding-left:10px; border-right:2px solid rgba(255,149,14,1.0);'>
					<ul id="nav">
    					<li class="expand">Old 4diac FORTE releases
    						<ul id="nav">
    							<li class="expand">2.0 Releases
                					<ul id="nav">
    									<li class="expand">4diac FORTE 2.0.0
                        					<ul id="nav">
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.0.zip">Source</a></li>
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.0.linux.x68_64.zip">Linux x86 64-bit</a></li>
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.0.linux.arm.zip">Linux ARM</a></li>
                        						<li><a href="https://www.eclipse.org/downloads/download.php?file=/4diac/releases/2.0/forte/forte_2.0.0.win32.zip">Windows</a></li>
                        					</ul>
                    					</li>
                					</ul>
    							</li>
    							<li class="expand">1.14 Releases   						
                					<ul id="nav">
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/forte/forte-incubation_1.14.0.zip">Source</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/forte/forte-incubation_1.14.0.linux.x86_64.zip">Linux x86 64-bit</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/forte/forte-incubation_1.14.0.linux.arm.zip">Linux ARM</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.14/forte/forte-incubation_1.14.0.win32.zip">Windows</a></li>
                					</ul>
                    			</li>						   						
    							<li class="expand">1.13 Releases
									<ul id="nav">
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/forte/forte-incubation_1.13.0.zip">Source</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/forte/forte-incubation_1.13.0.linux.x86_64.zip">Linux x86 64-bit</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/forte/forte-incubation_1.13.0.linux.arm.zip">Linux ARM</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.13/forte/forte-incubation_1.13.0.win32.zip">Windows</a></li>
                					</ul>
                    			</li>						
    							<li class="expand">1.12 Releases
									<ul id="nav">
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/forte/forte-incubation_1.12.0.zip">Source</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/forte/forte-incubation_1.12.0.linux.x86_64.zip">Linux x86 64-bit</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/forte/forte-incubation_1.12.0.linux.arm.zip">Linux ARM</a></li>
                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.12/forte/forte-incubation_1.12.0.win32.zip">Windows</a></li>
                					</ul>
    							</li>                    						
    							<li class="expand">1.11 Releases
    								<ul id="nav">
    									<li class="expand">1.11.0
                        					<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/forte/forte-incubation_1.11.0.zip">Source</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/forte/forte-incubation_1.11.0.linux.x86_64.zip">Linux x86 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/forte/forte-incubation_1.11.0.linux.arm.zip">Linux ARM</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.11/forte/forte-incubation_1.11.0.win32.zip">Windows</a></li>
                        					</ul>
										</li>
									</ul>    						
    							</li>
    							<li class="expand">1.10 Releases
    								<ul id="nav">
    									<li class="expand">1.10.3
                        					<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.3.zip">Source</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.3.linux.x86_64.zip">Linux x86 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.3.linux.arm.zip">Linux ARM</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.3.win32.zip">Windows</a></li>
                        					</ul>
										</li>
    									<li class="expand">1.10.2
											<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.2.zip">Source</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.2.linux.x86_64.zip">Linux x86 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.2.linux.arm.zip">Linux ARM</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.2.win32.zip">Windows</a></li>
                        					</ul>
    									</li>
    									<li class="expand">1.10.1    								
            								<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.1.zip">Source</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.1.linux.x86_64.zip">Linux x86 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.1.linux.arm.zip">Linux ARM</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.1.win32.zip">Windows</a></li>
                        					</ul>
                    					</li>    								
    									<li class="expand">1.10.0
            								<ul id="nav">
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.0.zip">Source</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.0.linux.x86_64.zip">Linux x86 64-bit</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.0.linux.arm.zip">Linux ARM</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.10/forte/forte-incubation_1.10.0.win32.zip">Windows</a></li>
                        					</ul>
                    					</li>
                    					<li class="expand">1.10 Milestones
                    						<ul id="nav">
                    							<li class="expand">4diac FORTE 1.10.0 RC2
                            						<ul id="nav">
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/forte/forte-incubation_1.10.0.RC2.zip">Source</a></li>
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/forte/forte-incubation_1.10.0.RC2_linux.x86_64.zip">Linux x86 64-bit</a></li>
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/forte/forte-incubation_1.10.0.RC2_linux.arm.zip">Linux ARM</a></li>
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC2/forte/forte-incubation_1.10.0.RC2_win32.zip">Windows</a></li>
                            						</ul>
                        						</li>
                    							<li class="expand">4diac FORTE 1.10.0 RC1
                            						<ul id="nav">
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/forte/forte-incubation_1.10.0.RC1.zip">Source</a></li>
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/forte/forte-incubation_1.10.0.RC1_linux.x86_64.zip">Linux x86 64-bit</a></li>
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/forte/forte-incubation_1.10.0.RC1_linux.arm.zip">Linux ARM</a></li>
                                						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.10.0/RC1/forte/forte-incubation_1.10.0.RC1_win32.zip">Windows</a></li>
                            						</ul>
                        						</li>
                						 	</ul>
                					 	</li>    								
    								</ul>
    							</li>
    							<li class="expand">1.9 Releases
            						<ul id="nav">
            							<li ><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/forte/forte-incubation_1.9.1.zip">4diac FORTE 1.9.1</a></li>
            							<li ><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/releases/1.9/forte/forte-incubation_1.9.0.zip">4diac FORTE 1.9.0</a></li>
                						<li class="expand">1.9.0 Milestones
                    						<ul id="nav">
                    							<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC3/forte/forte-incubation_1.9.0.RC3.zip">4diac FORTE 1.9.0 RC2</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC2/forte/forte-incubation_1.9.0.RC2.zip">4diac FORTE 1.9.0 RC2</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/RC1/forte/forte-incubation_1.9.0.RC1.zip">4diac FORTE 1.9.0 RC1</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M3/forte/forte-incubation_1.9.0.M3.zip">4diac FORTE 1.9.0 M3</a></li>
                        						<li><a href="http://www.eclipse.org/downloads/download.php?file=/4diac/milestones/1.9.0/M2/forte/forte-incubation_1.9.0.M2.zip">4diac FORTE 1.9.0 M2</a></li>
                    						</ul>
                						</li>
            						</ul>
        						</li>
    						 	<li class="expand"> Pre-Eclipse releases can be found at <a href="https://sourceforge.net/projects/fordiac/files/FORTE/">4diac's Sourceforge page</a>.</li>
						 	</ul>
					 	</li>
				 	</ul>					
				</td>
				<td width="33%" style='padding-left:10px; '>
					Old <a href="http://sourceforge.net/p/fordiac/fordiac-systems/ci/default/tree/">example systems</a> repository at Sourceforge.
				</td>			
			</tr>					
</table>

<p>The components of Eclipse 4diac are provided under <a href="https://www.eclipse.org/legal/epl-2.0/">Eclipse Public License, Version 2.0!</a>. </p>

<h1>Show your 4diac use</h1>	
<p>With these two stickers you can show the world that you are using 4diac. Put it on your web-page, flyers, controllers, laptops, t-shirts... <br/></p>

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
