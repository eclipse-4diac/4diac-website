<?php 


function getNewsHeadline($line){
	    $headline = explode('__FILE__, "', $line)[1]; //get the start of the headline
	    return explode('"', $headline)[0];               //strip everything after the ending "
	}


?>
