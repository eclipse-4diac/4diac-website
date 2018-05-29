<html>
<head>
<?php include 'head.php';?>
<title>4DIAC-News</title>
<meta name="description" content="Updates from the 4DIAC community for the 4DIAC community"> 
<meta name="keywords" content="updates, news, applications, noteworthy">

<link rel="alternate" href="/feed/" title="4diac's News RSS feed" type="application/rss+xml" />

</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/news.png" height="80px"/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>


<section class="content">
	<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
	<select name="news"  onchange='this.form.submit()'>
		<?php 
			$dir = "news/";
			$dfList = scandir($dir, 1);	
			if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['news'] == date("Y")){
				echo '<option selected value="' . date("Y") . '">' . date("Y") . '</option>';
			}else{
				echo '<option value="' . date("Y") . '">' . date("Y") . '</option>';
			}
			foreach($dfList as $element){
				if(is_dir($dir.$element) && $element != "figs" && $element != '.' && $element != ".."){
					if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['news'] == $element){
						echo '<option selected value="' . $element . '">' . $element . '</option>';
					}else{
						echo '<option value="' . $element . '">' . $element . '</option>';
					}
				}
			}
		?>
	</select>
	</form>
	
	<?php
		if($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST['news'] != date("Y")){
			$files = glob($dir . $_REQUEST['news'] . "/*.php");
		}else{
			$files = glob($dir . '*.php');
		}
		foreach(array_reverse($files) as $file) include $file;
	?>
</section>

<?php include 'footer.php';?>

</body>

</html> 
