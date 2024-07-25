<?php
session_start();
$username = $_SESSION['username'] ?? '';
if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
} else {
    unset($_POST['username']);
}

echo ($username);
$_SESSION['username']
?>

<form action="#" method="POST">
    <input type="text" name="username" value="<?= $username ?>">
    <button type="submit">Joch ti nis</button>
</form>

