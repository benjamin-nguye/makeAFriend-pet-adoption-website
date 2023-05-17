<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Contact Us</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/contact.css">
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
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <div class="content contact-content">
                <h1>Contact Information</h1>
                <dl>
                    <dt>Author</dt>
                    <dd>Benjamin Nguyen</dd>
                    <dt>Student ID</dt>
                    <dd>40242621</dd>
                    <dt>Email</dt>
                    <dd>benjamin.nguyen@mail.concordia.ca</dd>
                </dl>

                <div class="cat-picture">
                    <p>Here's a picture of the author's very own furry friend!</p>
                    <img src="images/IMG_2751.png" alt="Stevie the cat" class="stevie">
                </div>


                

            </div>

        </div>

       <!--Footer-->
       <?php
        include "footer.php";
        ?>
            

    </body>


</html>