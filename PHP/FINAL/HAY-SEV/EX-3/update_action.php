<?php
// Get current date
date_default_timezone_set('Asia/Phnom_Penh');
require_once('database.php');
if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(isset($_POST['title'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $post_date = date_default_timezone_set('Asia/Phnom_Penh');
        
    
        $statement = $database -> prepare ("UPDATE posts SET title=:title,description=:description,post_date=:post_date WHERE id=:id");
        $statement -> execute(
            [
                ':id' => $id,
                ':title' => $title,
                ':description' => $description,
                ':post_date' => $post_date
            ]
        );
        header('location: index.php');
    }
}


