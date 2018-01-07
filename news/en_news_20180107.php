<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Dynamic Type Load Prototype
</div>
<div class="news">
	<span class="left"><?php $date="2018-01-07 20:06"; echo $date;?></span> 
	<span class="center"><img src="news/figs/basys40.png" alt="BaSys4.0" width="70"/></span>	
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>As part of the <a href="https://www.basys40.de/">BaSys4.0 project</a>, which receives funding of the <a href="https://www.bmbf.de/en/index.html">Federal Ministry of Education and Research</a>, 4diac has been extended to support dynamic type load. This functionality allows to add new function block types during runtime, which is required for adaptable systems. It also simplifies testing, since the 4diac-rte does not have to be compiled anymore for every new function block or adapter type. The implementation is based on the work <i><a href="http://ieeexplore.ieee.org/document/7005164/">Reduction of development time by using scriptable IEC 61499 function blocks in a dynamically loadable type library</a></i> by Plasch, Hofman, Ebenhofer and Rooker.</p>

<p>The dynamic type load feature has been realized by LUA/LUAJit support. During the deployment of a function block instance, its type is matched with the types supported by the 4diac-rte. In case it is missing, the function block type is converted into lua and sent to the 4diac-rte for type creation. Open issues are collected <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=510954">here</a>. Current features are:</p> 

<ul>
	<li>introduction of the "dynamicTypeLoad" profile for devices which support dynamic type load managment commands</li>
	<li>query function block types and adapter types from the device during deployment</li>
	<li>dynamic deployment of basic function block types, composite function block types and adapter types </li>
	<li>dynamic function block type and adapter type creation within boot files</li>
	<li>integrate dynamic line buffer size and support multi line commands in boot files</li>
</ul>

<p>Special thanks to Martin Jobst, who provided the initial contributon for the LUA engine integration, the basic function block type support and the infastructure for adapters. Also many thanks for his support during the extensions for composite function block types and adapter types.</p>

<?php include 'greeting.html';?>

