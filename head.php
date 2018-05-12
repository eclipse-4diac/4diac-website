<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="format.css">

<link rel="stylesheet" type="text/css" href="//www.eclipse.org/eclipse.org-common/themes/solstice/public/stylesheets/vendor/cookieconsent/cookieconsent.min.css" />
<script src="//www.eclipse.org/eclipse.org-common/themes/solstice/public/javascript/vendor/cookieconsent/default.min.js"></script>

<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
$App = new App();
$Theme = $App->getThemeClass("quicksilver");
if ($Theme->hasCookieConsent()) {
    //Insert widgets from a 3rd party
    echo  '<!-- Google Tag Manager -->';
    echo  "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':!";
    echo  "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],";
    echo  "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=";
    echo  "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);";
    echo  "})(window,document,'script','dataLayer','GTM-5WLCZXC');</script>";
    echo  "<!-- End Google Tag Manager -->";    
}?>