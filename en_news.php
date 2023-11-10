<html>
<head>
<?php 
require_once("./resources/functions.php");

include 'head.php';?>


<title>4diac News</title>
<meta name="description" content="Updates from the 4diac community for the 4diac community"> 
<meta name="keywords" content="updates, news, applications, noteworthy">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv='content-language' content='en-us'>

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

<?php 

function printNewsEntryHeader($fileName, $HeadLine, $imgLink = null){
    $baseFileName = basename($fileName,'.php');
    echo '<div id="' . $baseFileName .'" class="newsheader">';
    echo $HeadLine;
    echo '</div>';
    echo '<div class="news">';
    $date = getDateFromFileName($baseFileName);     
    echo '  <span class="left">' . $date . '</span>';
    echo '	<span class="center">';
    if( null !== $imgLink){
        echo '	<img src="' . $imgLink .'" alt="news image" width="70"/>';
    }
    echo '  </span>';    
    echo '	<span class="right">Age: '; 
    
    echo date_diff(date_create($date),date_create(date("Y-m-d")))->format("%a days");
    echo '</span>';
    echo '</div>';
}

?>


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
