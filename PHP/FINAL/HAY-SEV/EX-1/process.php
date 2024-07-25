<?php
require_once 'templates/header.php';
?>
<!-- TODO WRITE CODE PHP AFTER SUBMIT FORM -->
<?php 
    function getFromPost($key)
        {
            return isset($_POST[$key]) ? $_POST[$key] : null;
        }

    $userName = getFromPost('username');
    $dateOfBirth = getFromPost('birth_day');
    $email = getFromPost('email');
    $password = getFromPost('password');
    $gender = getFromPost('gender');
    $province = getFromPost('province');
    $comment = getFromPost('comment');
    $subjects = $_POST['subjects'];
    if(isset($_POST['subjects'])){
        $subject = $_POST["subjects"];
        $skills = "";
        for($i = 0; $i< count($subject); $i++){

            $skills = $skills . " " . $subject[$i] ;
             
        }
    }

?>
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center">
            <p>RESULT</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <p>Username is:
                        <?php echo $userName ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your birth day is:
                        <?php echo $dateOfBirth ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Your email address is:
                        <?php echo $email ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your password is:
                        <?php echo $password ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Your gender is:
                        <?php echo $gender ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your province is:
                        <?php echo $province ?>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Your subjects are:
                        <?php echo $skills ?>
                    </p>
                </div>
                <div class="col">
                    <p>Your comment is:
                        <?php echo $comment?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'templates/header.php';
?>