<?php 

function getVersion(){
    return basename(getcwd());
}

function printNaNMainHeader(){
    $version = getVersion();
    echo '<html>';
    echo '<head>';
    include '../../head.php';
    echo '<link rel="stylesheet" type="text/css" href="/4diac/newandnoteworthy/nan.css">';
    echo '<title>New and Noteworthy in 4diac ' . $version . '</title>';
    echo '<meta name="description" content="Upates the ' . $version . ' release of Eclipse 4diac brings.">'; 
    echo '</head>';
    echo '<body>';
    include '../../header.html';
    
    echo '<section class="img">';
    echo '<img src="../../img/release.png"/>';
    echo '</section>';
    
    
    echo '<section class="left">';
    echo ' <!-- currently empty left section -->';
    echo '</section>';
    
    echo '<section class="content">';
    echo '	<h1>Eclipse 4diac ' . $version . ' - New and Noteworthy</h1>';
}

function printNaNIDEHeader(){
    printNaNComponentHeader("IDE");
}
    
function printNaNFORTEHeader(){
    printNaNComponentHeader("FORTE");
}

function printNaNComponentHeader($componentName){
    $version = getVersion();
    echo '<html>';
    echo '<head>';
    include '../../head.php';
    echo '<link rel="stylesheet" type="text/css" href="/4diac/newandnoteworthy/nan.css">';
    echo '<title>New and Notweworthy in 4diac ' . $componentName . ' ' . $version . '</title>';
    echo '<meta name="description" content="Upates the' . $version . 'release of Eclipse 4diac ' . $componentName . ' brings.">';
    echo '</head>';
    echo '<body>';
    include '../../header.html';
    
    echo '<section class="left">';
    echo ' <!-- currently empty left section -->';
    echo '</section>';
    
    echo '<section class="content">';
    echo '	<h1>Eclipse 4diac ' . $version . ' - New and Noteworthy in <br/>4diac ' . $componentName . '</h1>';
}

function printNaNfooter(){
    echo '</section>';    
    include '../../footer.php';
    echo '</body>';
    echo '</html>'; 
}

function printNaNEntryfooter(){
    echo '<table>';
    echo '  <tr>';
    echo "      <td style='padding-right:10px;' >".'<a href="index.php">Up</a></td>';
    echo "      <td style='padding-right:10px;' >".'<a href="4diacIDE.php">4diac IDE</a></td>';
    echo '      <td ><a href="4diacFORTE.php">4diac FORTE</a></td>';
    echo '  </tr>';
    echo '</table>';
    echo '</section>';    
    include '../../footer.php';
    echo '</body>';
    echo '</html>'; 
}
    
?>