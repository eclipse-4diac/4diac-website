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
    maxSize = document.getElementById("span-toc").scrollHeight;
    if (maxSize < document.getElementById("iframe-content").contentWindow.document.body.scrollHeight)
        maxSize = document.getElementById("iframe-content").contentWindow.document.body.scrollHeight;
    resizeIframe(document.getElementById("span-toc"), maxSize);
    resizeIframe(document.getElementById("iframe-content"), maxSize);
  }
</script>
<script type="text/javascript" src="jquery-1.6.2.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".expand").click(function(e) {
			$(this).toggleClass("expanded");
			$(this).children("ul:first").slideToggle("300");
			e.stopPropagation();
		});	
	}); //$(document).ready
</script>

<style type="text/css">
	#toc-nav {
		color:white;
		background-color:rgba(153,166,195,1.0);
		padding:5px 0px 0px 0px; 
		margin:0px;
		margin-left:5px;
		height:100%;
		width:400px;
		font-family: 'Open Sans', sans-serif;
		overflow: auto;
	}
	
	#toc-nav li > ul{
		list-style-type: square;
		padding-left:20px;
		padding-top:0px;
		font-weight:normal;
		color:white;		
	}
	
	#toc-nav ul {
		font-weight:bold;
		list-style-type: none;
		padding:0px;
		margin:0px;
		margin-right: 5px;
		color:white;		
	}
	
	#toc-nav ul > li {
		padding-top:5px;
	}
	
	#toc-nav li > ul > li {
		padding:0px;
	}
	
	
	#toc-nav li a:link, #toc-nav li a:visited{
	color:white;
	}
	
	#toc-nav li a:hover, #toc-nav li a:active{	
	color:rgba(1,34,105,1.0);
	background-color:rgba(153,166,195,1.0);
	border-radius:5px;
	}
	
	#toc-nav li a{
	text-decoration: none;
	}
	
	#toc-nav a {
		text-decoration:none;
		color: black;
	}
	
	#toc-nav span ul, #toc-nav li {
		list-style: none;
		padding-left:5px;
	}
	
	#toc-nav li {
		padding: 2px 2px 2px 15px;
		cursor: default;
		background: no-repeat scroll 0px 10px transparent;
		background-size: 12px 12px;
		background-position: 0px 5px; 
	}
	
	#toc-nav ul {
		display: none;
	}
	
	#toc-nav li.expand {
		background: url(../img/arrow-down.png) no-repeat scroll 0px 10px transparent;
		background-position: 0px 8px; 
	}
	
	.expanded {
		background: url(../img/arrow-up.png) no-repeat scroll 0px 10px transparent !important;
		background-position: 0px 8px; 
	}
	</style>	
</head>

<body>
<?php include 'header.html'; ?>

<section class="content">
	<h1>Documentation</h1>
	<section class="documentation">
		<span class="toc" id="span-toc" onchange="resizeIframes()">
			<ul id="toc-nav">
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
