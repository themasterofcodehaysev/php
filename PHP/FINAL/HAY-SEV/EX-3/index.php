<?php require_once 'partials/header.php'; ?>
<div class="container mt-5">
    <div class="d-flex justify-content-end align-items-center mb-5">
        <a href="create_form.php" class="btn btn-primary btn-sm">Add New +</a>
    </div>
    <?php
    // your code here  
    require_once("database.php");
    $statement = $database -> prepare ("SELECT * FROM posts");
    $statement -> execute();
    $users = $statement -> fetchall();
    ?>
    <?php 
    foreach($users as $user):
    ?>
        <div class="card mb-3">
            <div class="card-body">
                <h1 class="display-3"><?php echo $user['title'] ?></h1>
                <p class="card-text"><?php echo $user['description'] ?></p>
                <span><?php echo $user['post_date'] ?></span>
            </div>
            <div class="card-footer d-flex justify-content-end align-items-center gap-2">
                <a href="edit_form.php?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">edit</a>
                <a href="delete_action.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm">delete</a>
            </div>
        </div>
    <?php endforeach ?>
</div>
<?php require_once 'partials/footer.php'; ?>