<?php require_once 'templates/header.php'; ?>
    <div class="container p-4">
        <div class="d-flex justify-content-end p-4">
           <a href="views/create_view.php" class="btn btn-primary">Add Item +</a>
       </div>
       <?php
        // TODO:
        require_once ("models/student.php");
        $students = getStudents();
        foreach($students as $student):
       ?>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <?php echo $student['name'] ?>
                                    <span>
                                        <a href="views/edit_view.php?id=<?php echo $student['id'];?>" class="badge badge-primary mr-1"><i class="fa fa-pencil"></i></a>
                                        <a href="controllers/remove_controllerl.php?id=<?php echo $student['id']; ?>" class="badge badge-danger"><i class="fa fa-trash"></i></a>
                                    </span>
                                </li>
                                <li class="list-group-item"><?php echo $student['age'] ?></li>
                                <li class="list-group-item"><?php echo $student['province'] ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>      
        <?php endforeach ?>
    </div>
    <?php require_once 'templates/footer.php'; ?>