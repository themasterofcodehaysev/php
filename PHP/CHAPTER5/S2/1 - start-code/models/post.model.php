<?php
require '../databases/database.php';
function createPost(string $title, string $description) : bool
{
    global $connection;
    $statement = $connection->prepare("insert into posts (title, description) values (:title, :description)");
    $statement->execute([
    ':title' => $_POST['title'],
    ':description' =>  $_POST['description']]);
    return $statement->rowCount() > 0;
}

function getPost(int $id) : array
{
    global $connection;
    $statement = $connection->prepare('select * from posts where id = :id');
    $statement->execute([':id' => $id]);
    $post = $statement->fetch();
    return $statement->fetch();
}

function getPosts() : array
{
    global $connection;
    $statement = $connection->prepare("select * from posts");
    $statement->execute();
    $posts = $statement->fetchAll();
    return $statement->rowCount() > 0;
}

function updatePost(string $title, string $description, int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("update posts set title = :title, description = :description where id = :id");
    $statement->execute([
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':id' => $_POST['id']

    ]);
}

function deletePost(int $id) : bool
{
    global $connection;
    $statement = $connection->prepare("delete from posts where id = :id");
    $statement->execute([':id' => $id]);
    return $statement->rowCount() > 0;
}