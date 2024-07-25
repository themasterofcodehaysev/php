<?php
require_once("database.php");
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $statement = $database -> prepare ("DELETE FROM posts WHERE id=:id");
    $statement -> execute([':id' => $id]);
    header('location: index.php');
}