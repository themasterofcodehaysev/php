<?php
// TODO
require_once('database.php');
if(isset($_POST['name'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $class = $_POST['class'];

    $statement = $database -> prepare ('UPDATE users SET name=:name, age=:age, class=:class WHERE id=:id');
    $statement -> execute ([
            ':id' => $id,
            ':name' => $name,
            ':age' => $age,
            ':class' => $class
        ]);

        
}
header('location: index.php');