<?php
require_once('templates/header.php');

echo "<ul>";

// TODO
// - Your name is XXXXX
    $name = $_GET['name'];
    $hobbies = $_GET['hobby'];


    echo "<li> Your name is $name </li>";
// - Your hobbies areXXXXX
    echo "<li>Your hobbies are $hobbies </li>";
// - You are a boy/girl
    $gender = $_GET['gender'];
    if ($gender ==="male"){
        echo "<li>Your are a boy </li>";
    }else{
        echo "<li>Your are a girl </li>";
    }


echo "</ul>";


require_once('templates/footer.php');
