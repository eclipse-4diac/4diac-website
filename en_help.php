<html>
<head>
<?php
require_once("./resources/functions.php");
include 'head.php';?>

<link rel="stylesheet" type="text/css" href="help.css">
<title>Eclipse 4diac Documentation</title>
<meta name="Eclipse 4diac's documentation providing help and to get started with Eclipse 4diac"> 
<meta name="keywords" content="porting, tutorials, getting started, overview  ">

<script type="text/javascript" src="jquery-1.6.2.js"></script>

</head>

<body>
<?php include 'header.html'; ?>

<section class="left" id="section-doc-toc">
	<ul id="toc-nav">
        <?php 
            $XML = new DOMDocument(); 
            $XML->load( 'documentation/html/toc.xml' ); 
            #echo $XML->saveXML();
            $xslt = new XSLTProcessor(); 
            $XSL = new DOMDocument(); 
            $XSL->load( 'documentation/toc.xsl', LIBXML_NOCDATA); 
            #echo $XSL->saveXML();
            $xslt->importStylesheet( $XSL ); 
            echo $xslt->transformToXML( $XML ); 
        ?>
    </ul>
</section>


<section class="content">
	<h1>Documentation</h1>
	<section class="documentation">
	    <div class ="doc">
    	    <?php 
    	    	$helpPage = 'documentation/html/startHere/startHere.html';
    	    	
    	    	if(isset($_GET['helppage'])) {
    	    	    $helpPage = getHelpPageName($_GET['helppage'], $helpPage);
    	    	}
    	    	
    	    	$helpContent = file_get_contents($helpPage);
    	    	
    	    	//fix internal links
    	    	$helpContent = preg_replace('(<a href="[\./]*html/)', '<a href="en_help.php?helppage=html/', $helpContent);
    	    	//fix image links
    	    	$helpContent = preg_replace('( src="[\./]*html/)', ' src="documentation/html/', $helpContent);
    	    	
    	    	echo $helpContent;
    	    	
    	    	
    	    	function getHelpPageName($helpFileName, $defaultHelpFile){    	    	      	    	    
    	    	    $helpFileName = checkPageName($helpFileName, $defaultHelpFile);
    	    	    
    	    	    //only allow a help file if it is also referenced in the toc
    	    	    if(!strpos(file_get_contents("documentation/html/toc.xml"), $helpFileName)){
    	    	        return $defaultHelpFile;
    	    	    }
    	    	    
    	    	    $helpFileName = 'documentation/' . $helpFileName;
    	    	    
    	    	    if ( ! is_file($helpFileName ) || ! is_readable($helpFileName) ) {
    	    	        return $defaultHelpFile;
    	    	    }
    	    	    
    	    	    return $helpFileName;
    	    	}
    	    	
    	    	
    	    ?>
	    </div>	    
	</section>
</section>

<?php include 'footer.php'; ?>

</body>
</html> 
