<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	The End is Near! 
</div>
<div class="news">
	<span class="left"><?php $date="2018-01-17 20:06"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>

<p>Yes, we are entering the final phase for the 1.9.0 release. 
After nearly two years of hard work consisting of more then 1000 commits handling nearly 190 issues the endeavor of cleaning up the internal structures of 4diac-ide are finally paying of. 
Therefore we started the end-phase for the release. Our currently planed timeline is as follows:</p>

<ul>
	<table>
   		<tr>
        	<th align="left">1.9.0 M3:</th><td align="right">19.</td><td>January</td>
      </tr>  
      <tr>
        <th align="left">1.9.0 RC1:</th><td align="right">1.</td><td>February</td>
      </tr> 
      <tr>
        <th align="left">1.9.0 RC2:</th><td align="right">12.</td><td>February</td>
     </tr> 
     <tr>
        <th align="left">1.9.0 RC3:</th><td align="right">21.</td><td>February</td>
    </tr> 
    <tr>
        <th align="left">1.9.0:</th><td align="right">1.</td><td> March</td>
    </tr>
       </table>
 </ul>  

<p>Further information on the 1.9.0 release can be found <a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.9.0/">here</a>. 
There you will also find an overview on all issues and their current state.</p> 
<?php include 'greeting.html';?>

