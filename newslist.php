<?php 
    require_once("./resources/functions.php");


	$files = array_reverse(glob('./news/*.php'));
	
	function getNewsTextIntro($lines){
	    $content = '';
	    for ($x = 1; $x < count($lines); $x++) {
	        $content .= $lines[$x];
	    }
	    return substr(strip_tags($content), 0, 75) . ' ...';
	}
	
	$newsEntries = min(5, count($files));
	
	for ($i = 0; $i <= $newsEntries; $i++) {
	    $file = $files[$i];
	    echo '<div class="news-item"><a href="en_news.php#'. basename($file,".php");
	    echo '"><div class="news-date">' . date ("d M Y", filectime($file)) . '</div>';
	    $lines = file($file); 
	    echo getNewsHeadline($lines[0]);
	    echo '<div class="news-content">' . getNewsTextIntro($lines). '</div>';
	    echo '</a></div>';
	}	
?>