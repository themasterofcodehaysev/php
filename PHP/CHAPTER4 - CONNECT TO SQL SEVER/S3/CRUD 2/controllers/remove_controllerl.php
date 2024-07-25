<?php
// TODO:
require ("../models/student.php");
if(isset($_GET['id']) and !empty($_GET['id'])){
    $id=$_GET['id'];
    deleteStudent($id);
    header("Location: ../index.php");
}
?>
