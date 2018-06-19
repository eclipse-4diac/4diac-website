<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	4diac @ CeBit
</div>
<div class="news">
	<span class="left"><?php $date="2018-06-19 16:47"; echo $date;?></span> 
	<span class="center"><img src="news/figs/basys40.png" alt="BaSys4.0" width="100"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<table width="100%">
<tr>
<td width="45%">
<p>4diac attended the <a href="https://www.cebit.de/">CeBit 2018</a> trade fair and provided a small but important part within a module that has been built by <a href="https://www.festo.com">Festo GmbH & Co. KG</a>. The module performs a pick and place application for components manufactured by <a href="https://www.zf.com">ZF Friedrichshafen AG</a>. 4diac provides an OPC UA interface in terms of methods, which trigger and abort the assembling process as well as  acknowledge error messages. Also 4diac's dynamic type load functionality has been shown, by adding additional OPC UA methods to request measurement values or trigger basic functionality.<br>
This work has been realized within the <a href="https://www.basys40.de/">BaSys4.0 project</a>, which receives funding of the <a href="https://www.bmbf.de/en/index.html">Federal Ministry of Education and Research</a>.</p>
<?php include 'greeting.html';?>
</td>

<td>
<figure>		
	<img alt="demonstrator" src="news/figs/CeBit_PickAPlace.jpg" width="100%"><br>
	<figcaption>pick and place module from Festo with 4diac as a guest.</figcaption>
</figure>
</td>
</tr>
</table>
