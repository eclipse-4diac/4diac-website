<?php include '../nan_helper.php';
printNaNFORTEHeader();
?>

<ul>
	<li><a href="#performance">Performance and Memory Usage</a>
</ul>


<p>The changes in 4diac FORTE are mainly bugfixes and minor improvements. 
A complete list of all issues addressed in this release can be found in the <a href="https://projects.eclipse.org/projects/iot.4diac/releases/1.14.0/bugs">release's bug list</a>.


<h2 id="performance">Performance and Memory Usage</h2>
<table class=nan>
	<tr>
		<td>
			Reduce Jitter and Overhead of Timerhandler
		</td>
		<td>
		    The Timerhandler aquired a mutex in every invocation. 
		    This requires quite some execution time and therefore overhead. 
		    By changing that to a lockfree algorithm the mutex is only rarely needed which should espeically for E_CYCLE improve stability a lot. 
		    But also for E_DELAY the jitter should be reduced.  
		</td>
	</tr>	
</table>	

<?php printNaNEntryfooter()?> 