<?php
session_start();
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
    session_destroy(); ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Home Page</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/home.css">
        <link rel="stylesheet" href="styles/sidebar.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4dd50b44b2.js" crossorigin="anonymous"></script>
        <script src="scripts/time.js" defer></script>
        
    </head>

    <body>
        <!--Header-->
        <?php
        include "header.php";
        ?>

        <!--This is the content of the page-->
        <!--Every page has different content-->
            
        <div class="body-container">

            <!--This is the sidebar appearing on the left of every page-->
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
                <div class="sidebar-button active">
                    <a href="logout.php" class="sidebar-link">Log Out</a>
                </div> 
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <!-- Specific page content -->
            <div class="content home-content">

                <h2>You have successfully logged out.</h2>

            </div>

        </div>

        <!--Footer-->
        <?php
        include "footer.php";
        ?>
            
        
    </body>


</html>
   
<?php }
else { ?>

<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Home Page</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/home.css">
        <link rel="stylesheet" href="styles/sidebar.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4dd50b44b2.js" crossorigin="anonymous"></script>
        <script src="scripts/time.js" defer></script>
        
    </head>

    <body>
        <!--Header-->
        <?php
        include "header.php";
        ?>

        <!--This is the content of the page-->
        <!--Every page has different content-->
            
        <div class="body-container">

            <!--This is the sidebar appearing on the left of every page-->
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
                <div class="sidebar-button active">
                    <a href="logout.php" class="sidebar-link">Log Out</a>
                </div> 
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <!-- Specific page content -->
            <div class="content home-content">

                <h2>You are not logged in.</h2>
                <p>To log in, <a href="login.php">click here</a>.</p>

            </div>

        </div>

        <!--Footer-->
        <?php
        include "footer.php";
        ?>
            
        
    </body>


</html>

    
<?php }

?>