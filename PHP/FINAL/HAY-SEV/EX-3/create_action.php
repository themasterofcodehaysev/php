<?php
// Get current date
date_default_timezone_set('Asia/Phnom_Penh');
require_once('database.php');

if(isset($_POST['title']) && isset($_POST['description'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $post_date = date_default_timezone_set('Asia/Phnom_Penh');

    $statement = $database -> prepare ("INSERT INTO posts (title,description,post_date) VALUE (:title,:description,:post_date)");
    $statement -> execute(
        [
            ':title' => $title,
            ':description' => $description,
            ':post_date' => $post_date
        ]
    );
    header('location: index.php');
}

