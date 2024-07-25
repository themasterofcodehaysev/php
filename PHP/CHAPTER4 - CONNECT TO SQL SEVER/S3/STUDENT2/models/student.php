<?php
// database connection
$db = new PDO("mysql:host=localhost;dbname=student_db", "root", "");

/**
 * Get all students from the database
 
 * @return array of students 
 */
function getStudents()
{
    global $db;
    $statement = $db -> prepare ("SELECT * FROM students");
    $statement -> execute();
    $users = $statement-> fetchall();
    return $users;
}


/**
 * Get single student from the database
 * @param integer $id : the student id
 
 * @return associative_array: the student related to given id
 */
function getStudentById($id)
{
    global $db;
    $statement =$db->prepare("SELECT * FROM students WHERE id=:id");
    $statement->execute(
        [':id'=>$id]
    );
    $result=$statement->fetch();
    return $result;
   
}

/**
 * Remove single student from the database
 * @param integer $id : the id of the student to delete
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function deleteStudent($id)
{
    global $db;
    $statement =$db->prepare("DELETE FROM students WHERE id=:id");
    $statement->execute([":id" => $id]);
    if($statement->execute([':id'=>$id])){
        return true;
    }else{
        return false;
    }
    
}

/**
 * Update single student from the database
 * @param integer $id :  		the id of the student to update
 * @param string $name :  		the student name
 * @param integer $age :  		the age of the student
 * @param string $province :  	the student's province

 * @return boolean: true if deletion was successful, false otherwise
 */
function updateStudent($id, $name, $age, $province)
{
    global $db;
    $statement = $db -> prepare ("UPDATE students SET name = :name , age = :age , province = :province WHERE id = :id");
    $statement -> execute (
        [
            ":id" => $id,
            ":name" => $name,
            ":age" => $age,
            ":province" => $province  
            
        ]
    );
}

/**
 * Create single student from the database
 * @param string $name :  		the student name
 * @param integer $age :  		the age of the student
 * @param string $province :  	the student's province

 * @return boolean: true if create was successful, false otherwise */
function createStudent($name, $age, $province)
{
    global $db;
    $statement = $db -> prepare ("INSERT INTO students (name,age,province) VALUES (:name,:age,:province)");
    $statement -> execute (
        [
            ":name" => $name,
            ":age" => $age,
            ":province" => $province
        ]
    );
    header('location:../controllers/create_controller.php');
}
