<?php 
$XML = new DOMDocument(); 
$XML->load( './html/toc.xml' ); 
#echo $XML->saveXML();
$xslt = new XSLTProcessor(); 
$XSL = new DOMDocument(); 
$XSL->load( './toc.xsl', LIBXML_NOCDATA); 
#echo $XSL->saveXML();
$xslt->importStylesheet( $XSL ); 
print $xslt->transformToXML( $XML ); 
?>