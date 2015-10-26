<?php

function getGreeting($hrOfDay){
    
    $hrOfDay = (int) $hrOfDay;
    switch ($hrOfDay){
        case $hrOfDay >= 8 && $hrOfDay <= 11:
            $greeting = "Good morning!";
            break;
        case $hrOfDay > 11:
            $greeting = "Good day";
            break;
        
    }
    
    return $greeting;
}

print '<p>START';

print '<p>Passing 8AM: Greeting = ' . getGreeting(17);

print '<p>End';

?>