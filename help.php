<html>
<head>
<?php include 'head.php';?>
<title>4DIAC Documentation</title>
<meta name="4DIAC documentation providing help and to get started with 4DIAC"> 
<meta name="keywords" content="porting, tutorials, getting started, overview  ">
</head>

<body>
<?php include 'header.html'; ?>
<section class="content">
	<h1>Documentation</h1>
</section>

<?php 

chdir('documentation'); 

echo getcwd() . "\n";

echo '<frameset cols="30%,70%">';
echo '<frame src="toc.php" name="Toc">';
echo '<frame src="" name="Content">';
	
echo '<noframes>';
echo '    <body><a href="toc.php">4DIAC help index</a></body>'; 
echo '  </noframes>';
echo '</frameset>';

chdir('../'); 
include 'footer.php';
?>

</body>
</html> 