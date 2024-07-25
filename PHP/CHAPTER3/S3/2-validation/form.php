<?php

function validate_message($message)
{
    // function to check if message is correct (must have at least 10 caracters (after trimming))
   
    if (isset($_POST[$message]) && !empty($_POST[$message])){
        if(strlen(trim($_POST[$message])) >= 10 ){
            return true;
        }
    }else{
        return false;
    }
    

}

function validate_username($username)
{
    // function to check if username is correct (must be alphanumeric => Use the function 'ctype_alnum()')
    if (isset($_POST[$username]) && !empty($_POST[$username])){
        if(ctype_alnum($_POST[$username])){
            return true;
        }
    }else{
        return false;
    }
}

function validate_email($emails)
{
    // function to check if email is correct (must contain '@')
    if (isset($_POST[$emails]) && !empty($_POST[$emails])){
        if (strpos($_POST[$emails], '@') !== false) {
            return true;
        }
    }else{
        return false;
    }

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
    // Here is the list of error messages that can be displayed:
    // "Message must be at least 10 characters long"
    if (!validate_message('message')){
        $email_error = "Message must be at least 10 characters long" ;
    }
    // "You must accept the Terms of Service"
    if (!isset($_POST["terms"]) || $_POST["terms"] !== "checked") {
        $terms_error = "You must accept the Terms of Service";
    }
    // "Please enter a username"
    // "Username should contains only letters and numbers"
    if (validate_username('username')) {
        $user_error = "Please enter a username" ;
    }else{
        $user_error = "Username should contain only letters and numbers";
    }
    // "Please enter an email"
    // "email must contain '@'"
    if (validate_email('email')) {
        $email_error = "Please enter an email" ;
    }else{
        $email_error = "Email must contain '@'";
    }



}

?>

<form action="#" method="post">
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter Name" name="username">
            <small class="form-text text-danger"> <?php echo $user_error; ?></small>
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Enter email" name="email">
            <small class="form-text text-danger"> <?php echo $email_error; ?></small>
        </div>
    </div>
    <div class="mb-3">
        <textarea name="message" placeholder="Enter message" class="form-control"></textarea>
        <small class="form-text text-danger"> <?php echo $message_error; ?></small>
    </div>
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" name="terms" id="terms" value="terms"> <label for="terms">I accept the Terms of Service</label>
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