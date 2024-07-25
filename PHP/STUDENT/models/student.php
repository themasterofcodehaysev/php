<?php
// database connection
$database = new PDO("mysql:host=localhost;dbname=student_db","root","");
/**
 * Get all students from the database
 
 * @return array of students 
 */
function getStudents()
{
    global $database;
    $statement = $database -> prepare("SELECT * FROM students");
    $statement -> execute();
    $result = $statement -> fetchall();
    return $result;
}

/**
 * Get single student from the database
 * @param integer $id : the student id
 
 * @return associative_array: the student related to given id
 */
function getStudentById($id)
{
   global $database;
   if(isset($_POST['id'])){
        $id = $_POST['id'];
        $statement = $database -> prepare ("SELECT * FROM students WHERE id=:id");
        $statement -> execute ([":id" => $id]);
        $userID = $statement -> fetchall();
    }
}

/**
 * Remove single student from the database
 * @param integer $id : the id of the student to delete
 
 * @return boolean: true if deletion was successful, false otherwise
 */
function deleteStudent($id)
{
    global $db;
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $statement = $db -> prepare("DELETE FROM students WHERE id=:id");
        $statement -> execute ([":id" => $id]);
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
    global $database;
    $statement = $database -> prepare ("UPDATE students SET id=:id, name=:name, age=:age, province=:province WHERE id=:id");
    $statement -> execute (
        [
            ':id' => $id,
            ':name' => $name,
            ':age' => $age,
            ':province' => $province
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
  global $database;
  $statement = $database -> prepare ("INSERT INTO students (name,age,province) VALUES (:name,:age,:province)");
  $statement -> execute (
    [
        ':name' => $name,
        ':age' => $age,
        ':province' => $province
    ]
    );
    header('location:../controllers/create_controller.php');
}
