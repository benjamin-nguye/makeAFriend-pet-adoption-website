<?php


$login_username = $_POST['login-username'];
$login_password = $_POST['login-password'];

//echo ($login_username . "<br>");
//echo ($login_password . "<br>");

if (empty($login_username)) {
    $login_username_error = "Username required";
}

if (empty($login_password)) {
    $login_password_error = "Password required";
}

if ( ! file_exists("login.txt")) {
    echo ("please create an account");
}

//echo (file_get_contents("login.txt"));


else {

    $read_login = fopen("login.txt", "r") or die("cannot open file");

    
    
    if ($read_login) {
        while (($line = fgets($read_login)) !== false) {

            
            $info = explode(":", $line);
            $username_exists = ($info[0] == $login_username);
            //echo($info[0] . '/'.rtrim($info[1]).'/' . "<br>");
            //echo($username_exists . "<br>");
            
            
            if ($username_exists) {
                //echo (rtrim($info[1]) == $login_password);
                if (rtrim($info[1]) != $login_password) {
                    $login_password_error = "Incorrect password";
                }
                break;
            }  
        }
        
        
        if ( ! $username_exists) {
            $login_username_error = "No account with this username exists. Please create an account.";
        } 
    }
    
    fclose($read_login);

    
    if (isset($login_username_error) || isset($login_password_error)) {
        include("login.php");
    }
    else {
        session_start();
        $_SESSION['user'] = $login_username;
        include("giveaway.php");
    } 

} 
?>