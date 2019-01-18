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
	

?>
