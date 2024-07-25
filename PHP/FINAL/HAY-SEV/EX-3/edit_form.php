<?php require_once 'partials/header.php';?>
<div class="container mt-5">
   <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        
        <div class="card bg-light">
            <div class="card-body">
                <?php 
                 // your code here
                 require_once('database.php');
                 if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $statement = $database -> prepare("SELECT * FROM posts WHERE id=:id");
                    $statement -> execute([':id' => $id]);
                    $user = $statement -> fetch();
                }
                ?>
                <form action="update_action.php" method="POST">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>" >
                    <div class="mb-3">
                        <input type="text" name="title" value="<?=  $user['title'] ?>" class="form-control" placeholder="Title">
                    </div>
                    <div class="mb-3">
                       <textarea name="description" value="<?= $user['description'] ?>"  placeholder="Description" class="form-control"></textarea>
                    </div>
                    <div class="mb-3 d-grid gap-2">
                        <button class="btn btn-warning btn-block">Update Now</button>
                    </div>
                </form>
        </div>
    </div>
    <div class="col-3"></div>
   </div>
</div>
<?php require_once 'partials/footer.php';?>