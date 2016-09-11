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

<br/>
<?php 
	$files = array_reverse(glob('./workshops/*.php'));
	$count = 0;
	$size = count($files);
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<select name="workshop"  onchange='this.form.submit()'>
	<?php 
	foreach($files as $file){
		$fileName = basename($file,".php");		
		$releaseNumber = explode("_",$fileName);
		if($count == $size - 1){
			$releaseText = "1st 4diac Users' Workshop @ ETFA " . $releaseNumber[2];
		}
		elseif($count == $size - 2){
			$releaseText = "2nd 4diac Users' Workshop @ ETFA " . $releaseNumber[2];
		}
		elseif($count == $size - 3){
			$releaseText = "3rd 4diac Users' Workshop @ ETFA " . $releaseNumber[2];		
		}
		else{
			$releaseText = 	$size - $count . "th 4diac Users' Workshop @ ETFA " . $releaseNumber[2];		
		}	
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
