<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Create an Account</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/sidebar.css">
        <link rel="stylesheet" href="styles/create-account.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4dd50b44b2.js" crossorigin="anonymous"></script>
        <script src="scripts/time.js" defer></script>
        <script src="scripts/browse.js" defer></script>
    </head>

    <body>
        
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
                <div class="sidebar-button active">
                    <a href="create-account.php" class="sidebar-link">Create an account</a>
                </div>
                <div class="sidebar-button">
                    <a href="giveaway.php" class="sidebar-link">Have a pet to give away?</a>
                </div>
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <div class="content create-account-content">

                
                
                <div class="creation-container">
                    
                    <h1>Create an Account</h1>

                    <fieldset class="account-fieldset">

                            <form action="process-signup.php" method="post">
                                <label for="username" class="create-label">Username</label><br>
                                <input type="text" id="username" name="username">
                                <p class="instruction">Username can containe letters (uppercase or lowercase) and digits only.</p>
                                <?php
                                if (isset($username_error)) {?> 
                                <p class="error-message"> <?php echo($username_error) ?></p>
                                <?php } ?> <br>

                                <label for="password" class="create-label">Password</label><br>
                                <input type="password" id="password" name="password">
                                <p class="instruction">Password must be 4 characters long (letters and digits only) and must containe at least 1 letter and 1 digit.</p>
                                <?php
                                if (isset($password_error)) {?> 
                                <p class="error-message"> <?php echo($password_error) ?></p>
                                <?php } ?> <br>

                                <label for="password" class="create-label">Confirm Password</label><br>
                                <input type="password" id="confirm-password" name="confirm-password"><br>
                                <?php
                                if (isset($confirm_password_error)) {?> 
                                <p class="error-message"> <?php echo($confirm_password_error) ?></p>
                                <?php } ?> <br>

                                <div class="submit-container">
                                    <button type="submit" class="submit-button">Create an Account</button>
                                </div>
                                
                                
                            </form>
                    
                        
                        <p>Already have an account? <a href="login.php">Log in.</a></p>
                    </fieldset>
                    
                </div>
               

            </div>

        </div>

       <!--Footer-->
       <?php
        include "footer.php";
        ?>
            

    </body>


</html>