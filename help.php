<html>
<head>
<?php include 'head.php';?>
<title>4DIAC Documentation</title>
<meta name="4DIAC documentation providing help and to get started with 4DIAC"> 
<meta name="keywords" content="porting, tutorials, getting started, overview  ">

<script language="javascript" type="text/javascript">
  function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.body.scrollHeight + 'px';
  }
</script>

</head>

<body>
<?php include 'header.html'; ?>
<section class="content">
<table>
<tr>
<td style="vertical-align: top;">
<iframe id="documentationToc" src="documentation/toc.php" onload="resizeIframe(this)"></iframe>
</td><td style="vertical-align: top;">
<iframe id="documentationContent" name="Content" src="documentation/html/overview/overview.html" onload="resizeIframe(this)"></iframe>
</td>
</tr>
</table>
</section>

<?php include 'footer.php'; ?>

</body>
</html> 