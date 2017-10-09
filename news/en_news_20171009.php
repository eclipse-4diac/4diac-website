<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	10 Years and Counting
</div>
<div class="news">
	<span class="left"><?php $date="2017-10-09 18:00"; echo $date;?></span> 
	<span class="center"><img src="img/4diac_cake.png" alt="4diac's birthday cake" width="70"/></span>
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>In 2006 a handful researchers had a crazy idea: based on the results of two public funded research projects provide a full-fledged open source 
IEC 61499 PLC environment. The idea of 4diac was born. 
A year later, they presented the first 4diac version at the <a href="http://indin2007.ict.tuwien.ac.at/program_tutorials.php#Tutorial2">IEEE INDIN conference</a> 
in Vienna. Now ten years later the idea does not look so crazy any more. 
As Thomas Strasser (<a href="http://www.ait.ac.at/profile/detail/Strasser-Thomas/">AIT</a>), one of the co-founders, points it out: 
<i>"It is so exiting to celebrate the first 10 years of 4diac, to see a lot of users implementing academic applications but to recognize increasingly more and more industry-related applications. 
This is a very good basis for the further development and usage of 4diac."</i></p> 

<p>Lisbeth Mosnik, (<a href=" https://iktderzukunft.at">Austrian Federal Ministry for Transport, Innovation and Technology</a>) stresses the importance of R&D for innovation: 
<i>"4diac is a glowing example how publicly funded R&D projects and the availability of results (i.e., open science) can pave the ground for innovation ecosystems. 
We appreciate that the results are broadly used by a growing community, including a successful Austrian start-up."</i></p>

<p>Indeed 4diac has grown with each release. 
4diac-ide got more stable, more user-friendly and supported IEC 61499 better. 
Also FORTE changed a lot: it got more than twice as fast, uses only a third of its initial flash size and what’s maybe the most important point 4diac now runs on several PLCs 
(e.g., Wago PFC 200, Bosch Rexroth XM22). It is even an official Eclipse incubation project now.</p>

<p>But not only the number of supported platforms has increased, also the amount of supported communication interfaces has increased significantly from the humble beginnings of plain 
TCP/IP support to nowadays integration of MQTT, OPC, and OPC UA, as well as several fieldbuses like ModBus, EtherNet/IP, PowerLink, Wago K-Bus and many more.
4diac has not only followed the needs of Industry 4.0 but also shaped it with its ideas, concepts and the teams hard work.
<i>"A lot of thought and functionality has gone into 4diac in the last ten years, always with the needs of the users and ease of use as our guideline"</i>, 
Martin Melik Merkumians (<a href="https://www.acin.tuwien.ac.at/automatisierungs-und-steuerungssysteme/">TU Wien/ACIN</a>), Senior project member.</p>


<p>This would not been possible without the feedback from our users. 
Gerhard Ebenhofer (<a href="http://www.profactor.at">Profactor GmbH</a>), one of the co-founders, points it out very nicely: 
<i>"Many thanks for the feedback from our users (community) and for the fruitful brainstorming and discussion sessions we, the developers, had in the last ten years. 
I am looking forward to many more constructive discussions for further improvements in the next ten years."</i> 
Therefore, hear what they have say on 4diac’s anniversary:</p>

<ul>
  	<li><i>"For us 4diac was an important start-up aid, especially the people behind it were valuable discussion partners and guides for us"</i>, Arnold Kopitar, <a href="http://www.nxtcontrol.com/">nxtControl</a>
  	</li>

	<li><i>"4diac has allowed NOJA Power to lead the market with an innovative Smart Grid Automation solution for our Electricity Utility customers"</i>, Neil 0'Sullivan, <a href="http://www.nojapower.com.au/">NOJA Power</a>
	</li>
	
	<li><i>"We at Conmeleon appreciate the flexibility of FORTE for our home automation applications and of course the tireless support in the forums. Happy birthday guys and keep on going :-)"</i>, 
	     Herwig Eichler, <a href="http://www.conmeleon.org/">Conmeleon</a></li>
</ul>

<p>Even after ten years, the 4diac team is not tired and has many ideas for improving and extending 4diac. 
The next ten years are going to be just as exciting. 
<i>"For example, in the upcoming 1.9 release finally we will get subapplications and dynamically downloadable types (no more C++ compiling needed!)."</i> 
says Alois Zoitl (<a href="http://www.fortiss.org"></a>fortiss Gmbh), the creative leader behind 4diac.</p>

<p>With that, we are looking forward to the next ten years!</p>



<?php include 'greeting.html';?>
