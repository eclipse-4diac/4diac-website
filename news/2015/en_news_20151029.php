<div id="<?php echo basename(__FILE__,'.php');?>" class="newsheader">
	Improving Usability of Basic Function Block Editor
</div>
<div class="news">
	<span class="left"><?php $date="2015-10-29 12:06"; echo $date;?></span> 
	<span class="right">Age: <?php echo date_diff(date_create(date("Y-m-d h:i", strtotime($date))),date_create(date("Y-m-d h:i")))->format("%a days");?></span>
</div>
<p>The focus of our work for the next 4DIAC-IDE release (1.8.0) is on improving its usability. This means that you can do more with less clicks, that the things you need for a certain task are easy to find, and that disturbing elements are removed. The latest improvements concern the basic function block editor. We enhanced the property view so that we could get rid of the separate algorithm and internal variable editor tabs.</p>

<p><img src="https://eclipse.dev/4diac/news/figs/reworkedBFBui.png" alt="screenshot of 4DIAC basic function block editor" width="750"/></p>

<p>Depending on the selected element in the ECC editor you can manage the internal variables, add algorithms, or edit the EC actions of a state. In addition also the algorithm code can be edited in the properties, and for algorithms in ST again with syntax highlighting and code completion.</p>

<table>
	<tr><td>
	<figure>
		<img src="https://eclipse.dev/4diac/news/figs/TabStates.png" alt="screenshot of state tab" width="370"/>
		<figcaption>screenshot of state tab</figcaption>
	</figure>
	</td>
	<td>
	<figure>
		<img src="https://eclipse.dev/4diac/news/figs/TabTransition.png" alt="screenshot of transition tab" width="370"/>
		<figcaption>screenshot of transition tab</figcaption>
	</figure>
	</td></tr>
	<tr><td>	
	<figure>
		<img src="https://eclipse.dev/4diac/news/figs/TabAlgorithms.png" alt="screenshot of algorithms tab" width="370"/>
		<figcaption>screenshot of algorithms tab</figcaption>
	</figure>
	</td>
	<td>
	<figure>
		<img src="https://eclipse.dev/4diac/news/figs/TabInternalVars.png" alt="screenshot of internal variables tab" width="370"/>
		<figcaption>screenshot of internal variables tab</figcaption>
	</figure>
	</td></tr>
</table>

<p>In the ECC editor we also changed the look of the transition priorities making it easier to associate them to their transition and easier to distinguishable from transition conditions.</p>

<table>
	<tr><td>
<figure>
		<img src="https://eclipse.dev/4diac/news/figs/oldTransition.png" alt="screenshot of former transitions" width="370"/>
		<figcaption>screenshot of former transitions</figcaption>
</figure>
	</td>
	<td>
<figure>
		<img src="https://eclipse.dev/4diac/news/figs/newTransition.png" alt="screenshot of new transitions" width="370"/>
		<figcaption>screenshot of new transitions</figcaption>
</figure>
	</td></tr>
</table>

<p>With all these changes ECC editing becomes much easier and faster. We are already working on a preview version of 1.8.0 that you can test it for yourself.</p>

<?php include 'greeting.html';?>

<p>P.S.: One tip from us to make basic FB editing even more efficient: Try the split editor mode and use the ECC editor side by side with the interface editor. Find this under the menu: <i>Window > Editor > Toggle Split Editor (Vertical)</i></p><br>

