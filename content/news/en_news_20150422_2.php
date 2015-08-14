<div id="en_news_20150422_2" class="newsheader">Eclipse SCADA visualising a process automated with 4DIAC: Download the demo!</div>
<div class="news">
	<span class="left"><?php $date="2015-04-22 14:04"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p><a href="#20141013">Back in October</a>, we said that we were creating an example for 4DIAC and Eclipse SCADA working together. This demo is now ready for download - and to make it worth the wait, it comes complete with a detailed step-by-step guide showing how to get it up and running yourself!</p>
<p>The demo brings together Eclipse SCADA for the operator screen, 4DIAC for the controller, and the FBDK runtime for simulating the process. 4DIAC and Eclipse SCADA communicate via Eclipse SCADA's Small Footprint Protocol (SFP).</p>
<p>You can <a href="https://www.youtube.com/watch?v=i9dqLrf7DGo">watch a recording of the demo</a> in action and read a bit more about what it does in <a href="#20141013">our previous post</a>. For the full story, read the <a href="http://download.fortiss.org/public/IA/FLCDemo/flc_demo_doc_20150420.pdf">documentation</a> with over 20 pages of details on</p>
<ul>
	<li>The individual parts of the demo and how they all fit together
	<li>How to make FORTE - the 4DIAC runtime - run with SFP
	<li>How to build an Eclipse SCADA VI (Visual Interface) client
	<li>Where to find more valuable information about Eclipse SCADA
	<li>Tips for development and troubleshooting
</ul>
<p>The complete source code for the demo is available for download (as are Eclipse SCADA, 4DIAC and the FBDK, of course). The <a href="http://download.fortiss.org/public/IA/FLCDemo/4diac_eclipsescada_flcdemo_20150420.zip">download package</a> also includes a precompiled Windows executable of FORTE with SFP support for your convenience. We are also planning to bundle the demo source code with 4DIAC in one of the upcoming releases.</p>
<p>Your feedback is welcome!</p>
<p>Ben Schneider
	<br>fortiss GmbH
	<br>schneibe (at) in.tum.de
</p>
<figure>
	<img src="img/eclipseSCADA.jpg" alt="EclipseSCADA"/>
	<figcaption>EclipseSCADA</figcaption>
</figure>
<?php include 'greeting.html';?>