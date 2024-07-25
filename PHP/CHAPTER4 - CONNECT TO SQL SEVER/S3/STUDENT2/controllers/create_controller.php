<?php
// TODO:
    require_once ('../models/student.php');

        if(isset($_POST['name']) and isset($_POST['age']) and isset($_POST['province'])){
            if(!empty($_POST['name']) and !empty($_POST['age']) and !empty($_POST['province'])){
                $name = $_POST['name'];
                $age = $_POST['age'];
                $province = $_POST['province'];
                createStudent($name, $age, $province);
                header("location:../index.php");
            }else{
                header("location:../index.php?fill=no_filled");
            }

        }
    
?>