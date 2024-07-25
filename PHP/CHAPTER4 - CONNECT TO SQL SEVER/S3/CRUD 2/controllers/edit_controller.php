<?php
// TODO:
require ("../models/student.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['name']) and isset($_POST['age']) and isset($_POST['province'])){
        if(!empty($_POST['name']) and !empty($_POST['age']) and !empty($_POST['province'])){
            $id=$_POST['student_id'];
            $name=$_POST['name'];
            $age=$_POST['age'];
            $province=$_POST['province'];
            updateStudent($id,$name,$age,$province);
            header("Location: ../index.php");
        }else{
            header("Location: index.php");
        }
    }else{
        header("Location: index.php");
    }
}