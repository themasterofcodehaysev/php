<?php

function paramFromPost($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : null;
}

function secureData($data)
{
    $data = trim($data); // remove space
    // $data = stripslashes($data); // hello world / => seem not useful (maybe with databases)
    $data = htmlspecialchars($data);  // <script> alert("hacked") </script>
    return $data;
}

function validate_username($username)
{
    return ctype_alnum($username);
    //  preg_match('/^[a-zA-Z0-9]{3,10}$/i', $username)

}

function validate_email($email)
{
    for ($i = 0; $i < strlen($email); $i++) {
        if ($email[$i] == "@") {
            return true;
        }
    }
    return false;
    // filter_var($email, FILTER_VALIDATE_EMAIL)
    // preg_match('/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/', $email)
}

$user_error = "";
$email_error = "";
$terms_error = "";
$message_error = "";
$username = "";
$email = "";
$message = "";

$form_valid = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $form_valid = true;
    if (empty($_POST['username'])) {
        $user_error = "Please enter a username";
        $form_valid = false;
    } else {
        if (!validate_username(secureData($_POST['username']))) {
            $user_error = "Username should contains only letters and numbers";
            $form_valid = false;
        } else {
            $username = secureData($_POST['username']);
        }
    }

    if (empty($_POST['email'])) {
        $email_error = "Please enter an email";
        $form_valid = false;
    } else {
        if (!validate_email(secureData($_POST['email']))) {
            $email_error = "email must contain '@'";
            $form_valid = false;
        } else {
            $email = secureData($_POST['email']);
        }
    }
    
    if (empty($_POST['terms'])) {
        $form_valid = false;
        $terms_error = "You must accept the Terms of Service";
    }
    if (empty($_POST['message']) || strlen(secureData($_POST['message'])) < 10) {
        $message_error = "Message must be at least 10 caracters long";
        $form_valid = false;
    } else {
        $message = secureData($_POST['message']);   
    }
}

?>

<form action="#" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username" value=<?php echo $username; ?>>
            <small class="form-text text-danger"> <?php echo $user_error; ?></small>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter email" name="email" value=<?php echo $email; ?>>
            <small class="form-text text-danger"> <?php echo $email_error; ?></small>
        </div>
    </div>
    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"> <?php if(!$form_valid) { echo $message; } ?> </textarea>
        <small class="form-text text-danger"> <?php echo $message_error; ?></small>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" name="terms" id="terms" value="terms" <?php if(empty($terms_error)) {?> checked <?php } ?>> <label for="terms">I accept the Terms of Service</label>
        <small class="form-text text-danger"> <?php echo $terms_error; ?></small>
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>


<hr>

<?php
if ($form_valid) :
?>
    <div class="card">
        <div class="card-header">
            <p><?php echo $username; ?></p>
            <p><?php echo $email; ?></p>
        </div>
        <div class="card-body">
            <p class="card-text"><?php echo $message; ?></p>
        </div>
    </div>
<?php
endif;
?>
