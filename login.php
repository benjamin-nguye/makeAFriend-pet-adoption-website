<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/sidebar.css">
        <link rel="stylesheet" href="styles/login.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4dd50b44b2.js" crossorigin="anonymous"></script>
        <script src="scripts/time.js" defer></script>
        <script src="scripts/browse.js" defer></script>
    </head>

    <body>
        <?php
        session_start();
        ?>    

         <!--Header-->
         <?php
        include "header.php";
        ?>

        
        
        <!--This is the content of the page-->
        <!--Every page has different content-->
            
        <div class="body-container">
            <div class="sidebar">
                <div class="sidebar-button">
                    <a href="index.php" class="sidebar-link">Home</a>
                </div>
                <div class="sidebar-button">
                    <a href="find-dog-cat.php" class="sidebar-link">Find a Dog/Cat</a> 
                </div>
                <div class="sidebar-button">
                    <a href="dog-care.php" class="sidebar-link">Dog Care</a> 
                </div>
                <div class="sidebar-button">
                    <a href="cat-care.php" class="sidebar-link">Cat Care</a> 
                </div>
                <div class="sidebar-button">
                    <a href="create-account.php" class="sidebar-link">Create an account</a>
                </div>
                <div class="sidebar-button">
                    <a href="giveaway.php" class="sidebar-link">Have a pet to give away?</a>
                </div>
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <div class="content login-content">

                <?php
                if (isset($_SESSION['user'])) { ?>
                <h2>You are already logged in. </h2>
                <?php }

                else { ?>

                
                
                
                <div class="creation-container">
                    
                    <h1>Log in</h1>

                    <fieldset class="login-fieldset">

                        <form action="process-login.php" method="post">
                                    <label for="login-username" class="create-label">Username</label><br>
                                    <input type="text" id="login-username" name="login-username">
                                    <?php
                                    if (isset($login_username_error)) {?> 
                                    <p class="error-message"> <?php echo($login_username_error) ?></p>
                                    <?php } ?> <br><br>

                                    <label for="login-password" class="create-label">Password</label><br>
                                    <input type="password" id="login-password" name="login-password">
                                    <?php
                                    if (isset($login_password_error)) {?> 
                                    <p class="error-message"> <?php echo($login_password_error) ?></p>
                                    <?php } ?> <br>

                                <div class="submit-container">
                                    <button type="submit" class="submit-button">Log in</button>
                                </div>
                                
                                
                        </form>
                            
                            <p>Don't have an account? <a href="create-account.php">Sign up</a>.</p>
                        
                    </fieldset>
                    
                </div> <?php } ?>
               

            </div>

        </div>

       <!--Footer-->
       <?php
        include "footer.php";
        ?>
            

    </body>


</html>