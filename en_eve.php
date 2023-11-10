<html>
<head>
<?php 
    require_once("./resources/functions.php");
    include 'head.php';?>
<title>4diac @ events</title>
<meta name="description" content="The 4diac users' workshop brings the developers and users of 4diac together as the users are the main drivers of ongoing development activities. It provides a discussion platform to present achieved results based on the 4diac open source project. Moreover, new ideas and approaches as well as near future plans for 4diac can be discussed which turn this initiative into the position to become a larger framework for many application domains."> 
<meta name="keywords" content="4diac users, discussion, usage example, idea exchange">
<meta http-equiv='content-language' content='en-us'>
</head>

<body>
<?php include 'header.html';?>

<section class="img">
	<img src="img/uws.png" width="300px" alt="bringing together 4diac users"/>
</section>

<section class="left">
 <!-- currently empty left section -->
</section>

<section class="content">

<?php 
    if(isset($_GET['event'])) {        
        $eventPage = checkPageName($_GET['event'], "");
        $eventPage= 'events/en_event_' . $eventPage . '.php';
        
        if ( ! is_file($eventPage ) || ! is_readable($eventPage) ) {
            $eventPage = "";
        }
        if($eventPage === ""){
            getDefaultEventPage();
        }else{
            include $eventPage;
        }
        
    }else {
        getDefaultEventPage();
    }
    
    function getDefaultEventPage() {
        echo '<h1>4diac @ events</h1>
              <p>Eclipse 4diac&trade; has been founded to support research activities and industrial adoption of distributed automation systems.
                 Over time 4diac grew with new versions, improvements and new features for the modeling of distributed automation systems.
                 Moreover, a special focus was the performance improvement of the runtime system.
                 Even more important, 4diac as an IEC 61499-compliant distributed control environment for industrial and research applications has proven to be a stable basis for further research towards the next generation of distributed automation and control systems based on open standards.
                 To get in contact with its users and share results and future plans 4diac participates at different events, which are collected here:</p>
               <ul>';
        $files = array_reverse(glob('./events/*.php'));
        foreach($files as $file){
            $fileName = basename($file,".php");
            $f = fopen($file, 'r');
            if($f){
                $line = fgets($f);
                fclose($f);
                $line = trim(strip_tags($line));
                $fileName = str_replace("en_event_","", $fileName);
                echo '<li><a href="en_eve.php?event=' . $fileName . '">' . $line . '</a></li>';
            }
        }
        echo '</ul>';
    }
?>

</section>

<?php include 'footer.php'; ?>

</body>

</html> 
