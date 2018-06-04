<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&subset=latin' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="format.css">

<link rel="stylesheet" type="text/css" href="//www.eclipse.org/eclipse.org-common/themes/solstice/public/stylesheets/vendor/cookieconsent/cookieconsent.min.css" />
<script src="//www.eclipse.org/eclipse.org-common/themes/solstice/public/javascript/vendor/cookieconsent/default.min.js"></script>

<?php
require_once ($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
$App = new App();
$Theme = $App->getThemeClass("quicksilver");
print $Theme->getGoogleTagManager();
?>

