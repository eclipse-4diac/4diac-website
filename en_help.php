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
</head>

<body>
<?php include 'header.html'; ?>

<section class="content">
<h1>Documentation</h1>
<section class="documentation">
<iframe class="toc" id="iframe-toc" src="documentation/toc.php" onload="resizeIframes()"></iframe>
<iframe class="doc" id="iframe-content" name="Content" src="documentation/html/startHere/startHere.html" onload="resizeIframes()"></iframe>
</section>
</section>

<?php include 'footer.php'; ?>

</body>
</html> 
