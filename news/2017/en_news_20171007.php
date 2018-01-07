<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
4diac at SICE2017
</div>
<div class="news">
	<span class="left"><?php $date="2017-10-07 08:34"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
By invitation and support of <a href="https://www.jemima.or.jp/english_top.html">Japan Electric Measuring Instruments Manufacturers' Association (JEMIMA)</a> 
Alois Zoitl was able to present IEC 61499 and Eclipse 4diac at the <a href="http://www.sice.or.jp/sice2017/">SICE2017</a> conference in Kanazawa Japan. 
SICE2017 is the annual conference of the <a href="http://www.sice.jp/english/">Japanese Society of Instrument and Control Engineers</a>. 
Alois Zoitl's introduction plenary talk on 
<a href="http://www.sice.or.jp/sice2017/plenary.html#PT1">Future Control System Architecture Enabling Industrie 4.0 / Smart Manufacturing</a> 
featured the importance of IEC 61499 and showed how 4diac utilizing OPC UA can provide a potential solution for implementing 
Service-oriented (Machine) Control Architectures. </p>

<p>In addition, Alois Zoitl also participated in International Symposium on Smart Manufacturing and Industrial Network, 
which is a part of SICE2017 program. 
There 4diac was discussed among other important topics for automation such as device integration with FDT or security for control components.</p>

<figure class="single">
<img src="https://www.eclipse.org/4diac/news/figs/kanazawa_panel.jpg" width="600px" alt="panel discusion on standards for smart manufacturing" />
</figure>
<?php include 'greeting.html';?>
