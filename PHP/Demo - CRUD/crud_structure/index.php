<?php require_once 'partials/header.php';?>
<div class="container mt-5">
    <div class="d-flex justify-content-end align-items-center">
        <a href="create_form.php" class="btn btn-primary btn-sm">Add New +</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            <?php 
            require_once('database.php');
            $statement = $database -> prepare ('SELECT * FROM users');
            $statement -> execute ();
            $students = $statement -> fetchall();
            foreach($students as $student):
            ?>
            <tr>
                <td><?php echo $student['id'] ?></td>
                <td><?php echo $student['name'] ?></td>
                <td><?php echo $student['age'] ?></td>
                <td><?php echo $student['class'] ?></td>
                <td>
                    <a href="edit_form.php?id=<?php echo $student['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="delete_action.php?id=<?php echo $student['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?php require_once 'partials/footer.php';?>