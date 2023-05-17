<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Browsing Page</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/browse.css">
        <link rel="stylesheet" href="styles/sidebar.css">

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
                <div class="sidebar-button active">
                    <a href="browse.php" class="sidebar-link">Browse Available Pets</a> 
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
                    <a href="giveaway.php" class="sidebar-link">Have a pet to give away?</a>
                </div>
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <div class="content browse-content">

                <h1>Browse from a wide selection of lovable pets!</h1>
                <div id="browsing-content" style="width: 100%"></div>

            </div>

        </div>

       <!--Footer-->
       <?php
        include "footer.php";
        ?>
            

    </body>


</html>