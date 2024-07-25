<?php
// TODO:
require_once ('../models/student.php');
if(isset($_POST['id'])){
    $id = $_POST['id'];
    deleteStudent($id);
}
header("location:../index.php");