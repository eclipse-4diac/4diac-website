<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Connecting 4diac Applications with Matlab Simulation Model
</div>
<div class="news">
	<span class="left"><?php $date="2017-06-10 20:15"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>
4diac user Marc Jakobi developed a communicating library in Matlab, 
which allows connecting IEC 61499 control applications with simulation models in Matlab. 
The library, which is available as open source, implements the Client/Server protocol defined in the 
<a href="http://www.holobloc.com/doc/ita/index.htm">IEC 61499 compliance profile for feasibility demonstrations</a>. 
Therefore, on the 4diac side you just need to insert a server communication function block. 
For detailed documentation as well as the library code, please have a look at the <a href="https://github.com/MrcJkb/tcpip4diac">tcpip4diac project on GitHub</a>.
</p>
<?php include 'greeting.html';?>
