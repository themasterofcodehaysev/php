<?php
    $numbers = [5, 3, 4, 0, 5, 1];
    $i = 0;

    // Use a WHILE loop to display the numbers until it is a 0 (so display 5, 3, 4 only)

    while ($numbers[$i] !== 0){
        echo $numbers[$i]."\n";
        $i++;
    }

    
?>