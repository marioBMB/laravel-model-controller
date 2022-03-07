<?php 

function getFlagURL($nationality){
        
    if ($nationality == 'american'){
        return "US_flag.svg";
    }
    else if ($nationality == 'american/british' ){
        return "US-EN_flag.png";
    }
}
