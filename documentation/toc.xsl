<?xml version="1.0"?>
<!-- This file is based on code from the IBM developerWorks article "Documenting your project using the Eclipse help system" (by Arthur Barr, 2004-01-29), https://www.ibm.com/developerworks/library/os-echelp/ (retrieved 2014-05-08). -->
<xsl:stylesheet
   version="1.1"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:output method="html" indent="no" encoding="ISO-8859-1"/>

<xsl:template match="toc">
   <html>
<head>
<base target="Content"/>
<link rel="stylesheet" type="text/css" href="toc.css"/>
      </head>
      <body>
<!--  <h1><xsl:value-of select="@label" /></h1> -->         
         <ul>
            <xsl:apply-templates />
         </ul>
      </body>
   </html>
</xsl:template>

<xsl:template match="topic">
   <li>
      <xsl:choose>
         <xsl:when test="@href">
               <xsl:element name="a">
               <xsl:attribute name="href">
                  <xsl:value-of select="@href" />
                  </xsl:attribute>
               <xsl:value-of select="@label" />
            </xsl:element>
         </xsl:when>
         <xsl:otherwise>
            <xsl:value-of select="@label" />
         </xsl:otherwise>
      </xsl:choose>

      <xsl:if test="descendant::topic">
         <ul>
            <xsl:apply-templates/>
         </ul>
      </xsl:if>
   </li>
</xsl:template>

</xsl:stylesheet>