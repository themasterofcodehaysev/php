<?php require_once '../templates/header.php' ?>
    <div class="container p-4">
        <?php 
        // TODO:
        require_once("../models/student.php");
        $student = getStudentById($_GET['id']);
        ?>
        <form action="../controllers/edit_controller.php" method="post">
        <input type="hidden" value="<?=$student['id']?>" name="student_id">
        <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" value="<?php $student['name']?>" name="name" >
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Age" value="<?php $student['age']?>" name="age" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Province" value="<?php $student['province']?>" name="province">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-warning btn-block">Update</button>
            </div>
        </form>
       
    </div>
<?php require_once '../templates/footer.php' ?>