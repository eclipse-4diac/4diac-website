<html>
<head>
<?php include 'head.php';?>
<title>4DIAC Users' Workshop</title>
<meta name="description" content="The 4DIAC users' workshop brings the developers and users of 4DIAC together as the users are the main drivers of ongoing development activities. It provides a discussion platform to present achieved results based on the 4DIAC open source project. Moreover, new ideas and approaches as well as near future plans for 4DIAC can be discussed which turn this initiative into the position to become a larger framework for many application domains."> 
<meta name="keywords" content="4DIAC users, discussion, usage example, idea exchange">

</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/uws.png" alt="bringing together 4DIAC users"/>
</section>

<section class="content">
<h1>Users' Workshop</h1>

<h2>Aims and Objectives</h2>	
<p>4DIAC has been founded to support research activities and industrial adoption of distributed automation systems. Over time 4DIAC grew with new versions, improvements and new features for the modeling of distributed automation systems. Moreover, a special focus was the performance improvement of the runtime system. Even more important, 4DIAC as an IEC 61499-compliant distributed control environment for industrial and research applications has proven to be a stable basis for further research towards the next generation of distributed automation and control systems based on open standards.</p> 
<p>With 4DIAC users' workshop we want to bring the developers and users of 4DIAC together as the users are the main drivers of ongoing development activities. This event should provide a discussion platform to present novel research and achieved results based on the 4DIAC open source project. Moreover, new ideas and approaches as well as near future plans for 4DIAC can be discussed which turn this initiative into the position to become a larger framework for many application domains.</p>
<p>Contributions to this workshop may address, but are not limited to:</p>	
<ul>
	<li>Application of 4DIAC in automation projects across different industrial domains (manufacturing, robotics, logistics, energy, etc.</li>
	<li>Extension to the runtime environment (FORTE) and engineering tool (4DIAC-IDE)</li>
	<li>Integration to new communication technologies/protocols and/or porting to new hardware platforms</li>
	<li>Interoperability with different automation systems</li>
	<li>proposals for extending 4DIAC</li>
</ul>

<h2>Hands on Session</h2>
<p>The workshop will be accompanied by a half day hands on session where the 4DIAC team will be available for detailed discussions and explanation on using 4DIAC as well as on implementation details. The following topics are covered:</p>
<ul>
	<li>Short Introduction to IEC 61499 and 4DIAC</li>
	<li>Guided small control application example</li>
	<li>Implementing a control application for a simulated press application</li>
	<li>Extending 4DIAC-IDE</li>
	<li>Overview on FORTE</li>
	<li>Real-time execution and communication architecture</li>
	<li>etc.</li>
</ul>

<h2>Hardware Exhibition</h2>
<p>An exhibition and interoperability panel of control devices executing IEC 61499 (based on 4DIAC) will be held in the first time during the workshop of 2016.</p>

<h2>Workshop Presentation Formats and Submission of Proposals</h2>
<p>Authors may consider the following three presentation formats:</p>
<ul>
	<li>Workshop presentation: Oral presentation on the above topics.</li>
	<li>Workshop poster on the above topics: Intended for 4DIAC users not able to attend the workshop.</li>
	<li>Exhibition of control devices running 4DIAC.</li>
</ul>
<p>Presentations and posters will be published on the 4DIAC webpage after the event. For proposing a presentation, poster or hardware please contact <a href="mailto:alois.zoitl@gmx.at">Alois Zoitl, alois.zoitl@gmx.at<a/></p>

<h2>Registration Information</h2>
<p>Registration details for the workshop can be found <a href="http://www.etfa2016.org">here</a>.</p>

<h2>Authors Schedule</h2>
<table width="800px">
	<tr>
		<td><i>Deadline for submission of workshop contribution proposals:</i></td>
		<td>April 30, 2016</td>
	</tr>
	<tr>
		<td><i>Notification of acceptance of workshop contributions:</i></td>
		<td>May 15, 2016</td>
	</tr>	<tr>
		<td><i>Deadline for submission of final workshop presentations and posters:</i></td>
		<td>July 30, 2016</td>
	</tr>
</table>

<br/>
<?php 
	$files = array_reverse(glob('./workshops/*.php'));
	$count = 0;
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<select name="workshop"  onchange='this.form.submit()'>
	<?php 
	foreach($files as $file){
		$fileName = basename($file,".php");		
		$releaseNumber = explode("_",$fileName);
		$releaseText = 	"4DIAC Users' Workshop @ ETFA " . $releaseNumber[2];	
		if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['workshop'] == $fileName){
			echo '<option selected value="' . $fileName . '">' . $releaseText . '</option>';
		}elseif($count == 0){
			echo '<option selected value="' . $fileName . '">' . $releaseText . '</option>';
		}
		else{
			echo '<option value="' . $fileName . '">' . $releaseText . '</option>';
		}
		$count = $count + 1; 
	}
	?>
</select>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	include "workshops/" . $_REQUEST['workshop'] . ".php";
}else{
	include $files[0];
}
?>

</section>

<?php include 'footer.php';?>

</body>

</html> 
