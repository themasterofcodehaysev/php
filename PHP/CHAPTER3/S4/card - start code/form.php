<?php
function secureData($data)
{
    $data = trim($data); //remove space
    $data = htmlspecialchars($data); //not allow to run script
    return $data;
}
$values = [
    'username' => '',
    'code' => '',
];
$errors = [
    'username' => '',
    'code' => '',
];
$color = "red";
$is_form = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $regretUser = "/^[a-zA-Z0-9\s]+$/";
    $regretCode = "/^(?=.*[A-Z]){1,}(?=.*[!@#\$]){1,}[a-zA-Z0-9!@#\$]{8,}$/";
    $values['username'] = isset($_POST['username']) ? $_POST['username'] : '';
    $values['code'] = isset($_POST['code']) ? $_POST['code'] : '';
    
    // show the error message below the username if the username is beside rules below:
    //     - characters(Lower and upper) 
    //     - digits
    // show the error message below code if the code is beside rules below:
    //     - characters(Lower and upper)
    //     - digits
    //     - special characters (!@#$)
    //     - more or equal 8 chars
    //     * the correct code must be:
    //         - has at least one uppercase character 
    //         - has at least one special character
    // both username and code should be checked secureData() function

    $is_form = true;
    if(!preg_match($regretUser, $_POST["username"])){
        $is_form = false;
        $errors['username'] = 'Your name is not valid';
        echo $color;
        
    }
    if(!preg_match($regretCode, $_POST["code"])){
        $is_form = false;
        $errors['code'] = 'Your code is not valid';
        echo $color;
    }
    
    
}


?>

<?php
    $page = "";
    $pages = "";
    if (isset($_POST['username'])) {
        $page = $_POST['username'];
    }
    if (isset($_POST['code'])) {
        $pages = $_POST['code'];
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
                            <input type="text" class="form-control" <?php if($page == 'username'){ echo 'active bg-danger';} ?> value="" id="username" name="username" value="">
                            <small class="form-text text-danger">
                                <?= $errors['username'] ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="code" class="form-label">Code</label>
                            <input type="text" class="form-control" <?php if($pages == 'code'){ echo 'active bg-danger';} ?> value="" id="code" name="code" value="">
                            <small class="form-text text-danger">
                                <?= $errors['code'] ?>
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

<?php if ($is_form): ?>
    <div class="container mt-3">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <div class="card">
                    <div class="card-header text-center">
                        <p>Result</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">Your username is:
                                <?= $values['username'] ?>
                            </div>
                            <div class="col">Your code is:
                                <?= $values['code'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <?php
endif;
?>