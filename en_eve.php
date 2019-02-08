<html>
<head>
<?php include 'head.php';?>
<title>4diac @ events</title>
<meta name="description" content="The 4diac users' workshop brings the developers and users of 4diac together as the users are the main drivers of ongoing development activities. It provides a discussion platform to present achieved results based on the 4diac open source project. Moreover, new ideas and approaches as well as near future plans for 4diac can be discussed which turn this initiative into the position to become a larger framework for many application domains."> 
<meta name="keywords" content="4diac users, discussion, usage example, idea exchange">

</head>

<body>
<?php include 'header.html';?>



<section class="img">
	<img src="img/uws.png" alt="bringing together 4diac users"/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>

<section class="content">
<h1>4diac @ events</h1>
	
<p>Eclipse 4diac&trade; has been founded to support research activities and industrial adoption of distributed automation systems. Over time 4diac grew with new versions, improvements and new features for the modeling of distributed automation systems. Moreover, a special focus was the performance improvement of the runtime system. Even more important, 4diac as an IEC 61499-compliant distributed control environment for industrial and research applications has proven to be a stable basis for further research towards the next generation of distributed automation and control systems based on open standards. To get in conatact with its users and share results and future plans 4diac participates at different events, which will be collected here.</p> 

<br/>
<?php 
	$files = array_reverse(glob('./events/*.php'));
?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
<select name="event"  onchange='this.form.submit()'>
	<?php 
	foreach($files as $file){
		$fileName = basename($file,".php");	
		$f = fopen($file, 'r');
		if($f != FALSE){
			$line = fgets($f);
			fclose($f);
			$text = explode("--", $line);
			if($_SERVER['REQUEST_METHOD'] == 'POST' && $_REQUEST['event'] == $fileName){
				echo '<option selected value="' . $fileName . '">' . $text[1] . '</option>';
			}else{
				echo '<option value="' . $fileName . '">' . $text[1] . '</option>';
			}
		}
	}
	?>
</select>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include "events/" . $_REQUEST['event'] . ".php";
}else{
	include $files[0];
}
?>

</section>

<?php include 'footer.php';?>

</body>

</html> 
