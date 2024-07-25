<?php

    $fruit = ['name' => 'mango', 'quantity' => 15, 'price' => 10, 'country' => "Cambodia"];
	
	// The money you have
    $money = -1;
	
    // Display 
	// "Error: Your money cannot be negative" if money is negative,
    // or "You have enough money to buy this fruit"
    // or "You need more money to buy this fruit"
    if($money < 0){
        echo "Erro: Your money cannot be negative";
    }
    elseif ($money >= $fruit["price"]){
        echo " You have enough money to buy this fruit";
    }
    else {
        echo " You don't have enough money to buy this fruit";
    }

?>