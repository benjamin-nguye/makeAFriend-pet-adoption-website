<?php



$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

$filepath = "login.txt";



// validate inputs

if (empty($username)) {
    $username_error = "Username required";
}

if (empty($password)) {
    $password_error = 'Password required';
}

if (empty($confirm_password)) {
    $confirm_pass_error = "Confirm password";
}



// check if username already exists
if (file_exists($filepath)) {
    $handle = fopen($filepath, "r");
    if ($handle) {
        while (($line = fgets($handle)) !== false) {
            $data = explode(":", $line);
            if ($data[0] == $username) {
                $username_error = "Username already exists";
            }
        }
    }
    fclose($handle);
}


if (preg_match('/[^A-Za-z0-9]/', $username)) {
    $username_error = "Invalid username";
}

if ($password != $confirm_password) {
    $confirm_password_error = 'Password confirmation incorrect';
}

if (!preg_match('/[A-Za-z0-9]{4,}/', $password) || preg_match('/[^A-Za-z0-9]/', $password)) {
    $password_error = 'Invalid Password';
}

if (isset($username_error) || isset($password_error) || isset($confirm_password_error)) {
    include("create-account.php");
}

// if valid and doesn't exist, add to usernames file
else {
    $login = fopen($filepath, "a") or die("cannot open file");
    fwrite($login, $username . ":" . $password . "\n");
    fclose($login);

    include("success.php");
} 


?>