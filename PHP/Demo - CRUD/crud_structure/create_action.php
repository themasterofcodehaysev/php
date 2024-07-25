<?php
//TODO:
require_once('index.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['name']) && isset($_POST['age']) && isset($_POST['class'])){
        if(!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['class'])){
            $name = $_POST['name'];
            $age = $_POST['age'];
            $class = $_POST['class'];

            $statement = $database -> prepare("INSERT INTO users (name,age,class) VALUES (:name,:age,:class)");
            $statement -> execute (
                [
                    ':name' => $name,
                    ':age' => $age,
                    ':class' => $class
                ]
            );
            header ('location: index.php');

        }
    }
}

