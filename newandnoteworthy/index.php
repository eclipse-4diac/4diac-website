<html>
<head>
<?php include '../head.php';?>
<title>Eclipse 4diac New and Noteworthy</title>
<meta name="Overview on the major changes in the recent releases"> 
<meta name="keywords" content="new, noteworthy, updates, changes, fixed issues">
</head>

<body>
<?php include '../header.html';?>

<section class="img">
	<img src="../img/release.png"/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>



<section class="content">
<h1>New and Noteworthy</h1>
<p>Overview on the changes and improvements of the recent releases:</p>

<ul>
<?php
    $dirs = array_filter(glob('*'), 'is_dir');
    foreach(array_reverse($dirs) as $dir) {
        if($dir != 'template'){
            echo '<li><a href="./' . $dir . '/index.php">Eclipse 4diac ' . $dir . '</a></li>';
        }
    }
?>

</ul>


</section>

<?php include '../footer.php';?>

</body>

</html> 