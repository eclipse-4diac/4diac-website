<?php include '../nan_helper.php';
printNaNIDEHeader();
?>
	
<ul>
	<li><a href="#applicationEditing">Application Editing</a>
	<li><a href="#generalUpdates">General Updates</a>
</ul>
	
<h2 id="applicationEditing">Application Editing</h2>
<table class=nan>
	<tr>
		<td>
			New Shortcuts
		</td>
		<td>
			<table class=shortcut>
				<tr>
					<td>
						<b>GoTo Child</b>: jumps to child of a selected pin 
					</td>
					<td>
						<b>CTRL + SHIFT + ARROW_DOWN </b> or <br>
						Navigate > Go To Child
					</td>
				</tr>
				<tr>
					<td>
						<b>GoTo Pin Below</b>: jumps to pin below of a selected pin
					</td>
					<td>
						<b>CTRL + ARROW_DOWN </b>
					</td>
				</tr>
				<tr>
					<td>
						<b>GoTo Pin Above</b>: jumps to pin above of a selected pin
					</td>
					<td>
						<b>CTRL + ARROW_UP </b>
					</td>
				</tr>
				<tr>
					<td>
						<b>Follow Connection Left / Jump Opposite Pin</b>: follows the connection of an input pin <b>OR</b> jumps to the left opposite pin of an output pin inside an FB
					</td>
					<td>
						<b>CTRL + ARROW_LEFT </b> or <br>
						Navigate > Follow Left Connection
					</td>
				</tr>
				<tr>
					<td>
						<b>Follow Connection Right / Jump Opposite Pin</b>: follows the connection of an output pin <b>OR</b> jumps to the right opposite pin of an input pin inside an FB
					</td>
					<td>
						<b>CTRL + ARROW_RIGHT </b> or <br>
						Navigate > Follow Right Connection
					</td>
				</tr>
				<tr>
					<td>
						<b>Toggle Connection Visibility</b>: selected hidden connection get visible and vice versa
					</td>
					<td>
						<b>CTRL + T </b> or <br>
						Source > Toggle Connection Visibility
					</td>
				</tr>
			</table>
		</td>
	</tr>		
	<tr>
		<td>
			Better Sorting in New-Instance Search
		</td>
		<td>
			Search of new instance search (doubleclicking main editor) now has a best match search for a faster searching of FBs
		</td>
	</tr>	
	<tr>
		<td>
			Bugfixes
		</td>
		<td>
		    The list of bugfixes is available in Bugzilla. 
		</td>	
	</tr>
</table>	

<h2 id="generalUpdates">General Updates</h2>

<table class=nan>
	<tr>
		<td>
			Update to Eclipse 2021-12
		</td>
		<td>
		    4diac IDE has been updated to use Eclipse Platform 2021-12.
		</td>
	</tr>
</table>


<?php printNaNEntryfooter()?> 