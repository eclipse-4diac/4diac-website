<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Guest Post: NOJA Power's Smart Grid Automation Software
</div>
<div class="news">
	<span class="left"><?php $date="2015-12-10 09:36"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>Today we have a guest post entry from NOJA Power presenting their Smart Grid Automation (SGA) 
Software based on 4DIAC:</p> 

<p><center><img src="https://www.eclipse.org/4diac/news/figs/sga-banner.jpg" alt="NOJA Power sga banner" width="800"/></center></p>

<p>
<a href="http://www.nojapower.com.au/index.html">NOJA Power</a> (NOJA) researches, develops, 
manufactures and supplies low and medium voltage switchgear, specialising in auto reclosing circuit
breakers for industrial, infrastructure and electricity distribution utilities.</p>

<p>
NOJA's signature product is the <a href="http://www.nojapower.com.au/product/recloser.html">OSM series</a>
of medium-voltage (11kV and above) Automatic Circuit Reclosers (ACRs) which combine vacuum interruptors
and solid dielectric insulation for switching, with state-of-the-art microelectronics for protection,
SCADA and automation.
</p>


<p>
NOJA's vision is to be the world leader in medium-voltage outdoor switchgear. The company has moved
towards achieving that vision with the installation of more than 35,000 NOJA Power OSM series ACRs in over 84 countries worldwide.
</p>

<p>
As NOJAs market penetration has increased, the company has faced these problems:   
</p>
<ul>
    <li>How to accommodate customisation requests from customers without incurring the QA overheads of
        touching their base code?</li>
    <li>How to provide a pathway toward distributed power system automation applications in the 
        &quot;Smart Grid&quot;  of the future?</li>
</ul>

<p>
Part of the long-term solution is <a href="https://en.wikipedia.org/wiki/IEC_61850">IEC 61850</a>, 
&quot;the&quot; standard for power system protection, SCADA and automation. NOJA has IEC 61850 firmly on
its product roadmap. However IEC 61850 currently does not standardise the specification of application 
logic in Integrated Electronic Devices (IEDs) such as NOJA's <a href="http://www.nojapower.com.au/product/electronic-control.html">RC10 Controller</a>. This makes it impossible to deploy multi-vendor, portable
automation schemes using IEC 61850 alone.
</p>

<p>
NOJA has turned to <a href="https://en.wikipedia.org/wiki/IEC_61499">IEC 61499</a> to provide the crucial &quot;missing link.&quot; Now in its Second Edition,
IEC 61499 supports the interoperable specification, development, deployment and execution of distributed industrial automation applications. NOJA has adopted the Open Source 4DIAC Framework for Distributed Industrial Automation and Control by embedding <a href="en_rte.php">4DIAC's FORTE Runtime Environment</a>
into its controllers, and integrating the <a href="en_ide.php">4DIAC-IDE</a> into its design toolset.
</p>

<p>
Initially, NOJA have taken several steps to control the risk of &quot;unconstrained&quot; customisation:
</p>
<ul>
    <li>Their implementation does not currently support the creation of new function block types -
        it includes only the standard types, plus a few NOJA specials for accessing their real-time
        database</li>
    <li>But note that composite FBs can be created and used</li>
    <li>The system limits the amount of CPU that FORTE can use, and prioritises it below critical 
        protection and control functions</li>
    <li>NOJA provides a special group of dynamically typed variables which can be mapped to and from the
        contents of IEC 61850 GOOSE messages</li>
</ul>

<p>
Thanks to ongoing improvements in the 4DIAC suite, the solution looks great, works well, and provides excellent developer support.
</p>

<p>
One of NOJA's customers is already using this new capability in a stand-alone application, and NOJA 
is actively seeking development collaborators, especially Power Utilities, for distributed applications.
NOJA has plans to improve the offering including:
</p>
<ul>
    <li>Performance (speed) improvement</li>
    <li>Co-opting one or more secure communication profiles, since secure communication over public
        infrastructure is an absolute must for power system applications.</li>
</ul>

<table><tr>
	<td >
	<figure>
		<img src="https://www.eclipse.org/4diac/news/figs/SMG-screen.jpg" alt="NOJA Power Smart Grid Automation Software (Function Blocks)" width="350"/>
		<figcaption>NOJA Power Smart Grid Automation Software (Function Blocks)</figcaption>
	</figure>			  
		</td>
    <td width="40">
		</td>
    <td >
<figure>
		<img src="https://www.eclipse.org/4diac/news/figs/Load-Restore-Application.jpg" alt="NOJA Power Smart Grid Automation Software (Load Restore Application)" width="350"/>
		<figcaption>NOJA Power Smart Grid Automation Software (Load Restore Application)</figcaption>
	</figure>			 
</td>
</tr></table>


<p>
Author: <b>David Dart</b> <br/>
<i>NOJA Power R&D Director</i>
<p>
<br>
