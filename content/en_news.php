<!DOCTYPE html>
<head>
<meta charset="ANSI">
<link rel="stylesheet" type="text/css" href="format.css">

<title>4DIAC-News</title>
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/news.png" height="80px"/>
</section>

<section class="content">
	<?php 
		$alle = glob('./news/*.php');
		foreach($alle as $datei) include $datei;
	?>
</section>

<?php include 'footer.html';?>

</body>

</html> 