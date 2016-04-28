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

<iframe id="documentationToc" >
<?php 
$XML = new DOMDocument(); 
$XML->load( './documentation/toc.xml' ); 
#echo $XML->saveXML();
$xslt = new XSLTProcessor(); 
$XSL = new DOMDocument(); 
$XSL->load( './doctoc.xsl', LIBXML_NOCDATA); 
#echo $XSL->saveXML();
$xslt->importStylesheet( $XSL ); 
print $xslt->transformToXML( $XML ); 
?>
</iframe>
<iframe id="documentationContent" name="Content" src="documentation/html/overview/overview.html"  ></iframe>

</section>

<?php include 'footer.php'; ?>

</body>
</html> 