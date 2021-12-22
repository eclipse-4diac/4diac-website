<?php 


function getNewsHeadline($line){
    $headline = explode('__FILE__, "', $line)[1]; //get the start of the headline
    return explode('"', $headline)[0];               //strip everything after the ending "
}

function getDateFromFileName($baseFileName) {
    $dateString =  explode("_", $baseFileName)[2];
    $dateString = substr_replace($dateString, '-', 6, 0);
    return substr_replace($dateString, '-', 4, 0);
}
	
function checkPageName($fileName, $defaultFile){
    /* the checks in this functions are based on an example from
     * Jörg Reinholz at the https://wiki.selfhtml.org/wiki/PHP/Tutorials/Templates/Dateien_mit_include_nachladen
     * page provided as public domain.
     */
    $fileNameCopy = $fileName;  //create copy for later chekcs
    
    //given file name must not contain ../, /. (hidden unix file), url (://)
    $arForbiddenStrings = array('../', '/.', '://', '\\\\', '//' );
    //replace forbiden strings with nothing
    $fileName=str_replace($arForbiddenStrings, '', $fileName);
    
    if(! $fileName == $fileNameCopy){
        //there where bad strings in the given param, return the default help file
        return $defaultFile;
    }
    
    $forbiddenChars='/[^A-Za-z0-9_.\/*+:,-]/';
    if ( preg_match($forbiddenChars, $fileName) ) {
        return $defaultFile;
    }
    
    if ( $fileName && '.' == $fileName[0] ) {
        return $defaultFile;
    }
        
    return $fileName;
}


?>
