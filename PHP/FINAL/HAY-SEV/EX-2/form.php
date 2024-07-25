<!-- WRIRE CODE PHP Submit FORM WITH VALIDATION -->
<?php

    $regexName = "/^[a-z\d]{1-8}$/";
    $regexPas = "/^[a-zA-Z\s\d\.@#$!%]+$/";
    $username = "";
    $password = "";
    $error_usermessage = "";
    $error_passwordmessage = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $is_form = true;
        if(empty($_POST['username'])){
            $error_usermessage = "Please! Enter username";
            $is_form = false;
            if(preg_match($regexName, $_POST['username'])){
            
                $username = $_POST['username'];
            }else{
                $error_usermessage = "Username should be only contains letter and numbers";
            }
        }


        if(empty($_POST['password'])){
            $error_passwordmessage = "Please! Enter password";
            $is_form = false;
        }elseif(!preg_match($regexPas, $_POST['password'])){
            $error_passwordmessage = "Password must be contain 5 or more charecters and must be uppercase,lowercase,number,and a sign ";
            $is_form = false;
        }else{
            $password = $_POST['password'];
        }
    }

?>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    <h1>Form</h1>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" value="" id="username" name="username" value="">
                            <small class="form-text text-danger">
                                <?php echo $error_usermessage ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="text" class="form-control" value="" id="password" name="password" value="">
                            <small class="form-text text-danger">
                                <?php echo $error_passwordmessage ?>
                            </small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<br>
<?php
if ($is_form):
    ?>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <p>
                            username:
                            <?= $_POST['username'] ?>
                        </p>
                        <p>
                            password:
                            <?= $_POST['password'] ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
    <?php
endif;
?>