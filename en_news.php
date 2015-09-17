<html>
<head>
<?php include 'head.php';?>
<title>4DIAC-News</title>
<meta name="description" content="Updates from the 4DIAC community for the 4DIAC community"> 
<meta name="keywords" content="updates, news, applications, noteworthy">

</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/news.png" height="80px"/>
</section>

<section class="content">
	<?php 
		$folder = glob('./news/*.php');
		foreach(array_reverse($folder) as $file) include $file;
	?>
</section>

<?php include 'footer.php';?>

</body>

</html> 
