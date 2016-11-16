<html>
<head>
<?php include 'head.php';?>
<title>4DIAC Documentation</title>
<meta name="4DIAC documentation providing help and to get started with 4DIAC"> 
<meta name="keywords" content="porting, tutorials, getting started, overview  ">

<script language="javascript" type="text/javascript">
function resizeIframe(obj, size) {
    obj.style.height = size + 'px';
  }

  function resizeIframes() {
    maxSize = document.getElementById("iframe-toc").contentWindow.document.body.scrollHeight;
    if (maxSize < document.getElementById("iframe-content").contentWindow.document.body.scrollHeight)
        maxSize = document.getElementById("iframe-content").contentWindow.document.body.scrollHeight;
    resizeIframe(document.getElementById("iframe-toc"), maxSize);
    resizeIframe(document.getElementById("iframe-content"), maxSize);
  }
</script>
<script type="text/javascript" src="../jquery-1.6.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".expand").click(function(e) {
			$(this).toggleClass("expanded");
			$(this).children("ul:first").slideToggle("300");
			e.stopPropagation();
		});	
	}); //$(document).ready
</script>	
</head>

<body>
<?php include 'header.html'; ?>

<section class="content">
	<h1>Documentation</h1>
	<section class="documentation">
		<span class="toc">
			<ul id="nav">
	            <?php 
$XML = new DOMDocument(); 
$XML->load( './documentation/toc.xml' ); 
#echo $XML->saveXML();
$xslt = new XSLTProcessor(); 
$XSL = new DOMDocument(); 
$XSL->load( './documentation/toc_2.xsl', LIBXML_NOCDATA); 
#echo $XSL->saveXML();
$xslt->importStylesheet( $XSL ); 
print $xslt->transformToXML( $XML ); 
?>
	        </ul>
	    </span>
		<iframe class="doc" id="iframe-content" name="Content" src="documentation/html/overview/overview.html" onload="resizeIframes()"></iframe>
	</section>
</section>

<?php include 'footer.php'; ?>

</body>
</html> 
