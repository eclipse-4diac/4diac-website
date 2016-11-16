<?php 
$XML = new DOMDocument(); 
$XML->load( './toc.xml' ); 
#echo $XML->saveXML();
$xslt = new XSLTProcessor(); 
$XSL = new DOMDocument(); 
$XSL->load( './toc_2.xsl', LIBXML_NOCDATA); 
#echo $XSL->saveXML();
$xslt->importStylesheet( $XSL ); 
print $xslt->transformToXML( $XML ); 
?>