<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Cat Care</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/dog-care.css">
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
                <div class="sidebar-button active">
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

            <div class="content dog-care-content">

                <h1>make<span style="color:rgb(255, 204, 0);font-weight:500;">A</span>friend's cat caring tips</h1>

                <p>Forgetting something? Here's a little refresher for caring for your feline friend.</p>

                <img src="https://img.freepik.com/free-photo/close-up-beautiful-cat-with-owner_23-2149216334.jpg?w=2000"
                alt="https://img.freepik.com/free-photo/close-up-beautiful-cat-with-owner_23-2149216334.jpg?w=2000"
                style="width: 700px">
                <p class="image-credit">Picture from Freepik</p><br>

                <h2>Feeding</h2>
                <p>Here are a few resources to help you with feeding your cat:</p>
                <ul>
                    <li>
                        <a href="https://weareallaboutcats.com/10-tips-to-improve-your-cats-diet/" class="care-link" target="_blank">All About Cats</a>
                    </li>
                    <li>
                        <a href="https://www.purina.com/articles/cat/feeding/how-to-feed-a-cat" class="care-link" target="_blank">Purina</a>
                    </li>
                    <li>
                        <a href="https://www.aspca.org/pet-care/cat-care/cat-nutrition-tips" class="care-link" target="_blank">ASCPA</a>
                    </li>
                </ul><br>

                <h2>Grooming</h2>
                <p>Yep, it's possible! Here's how:</p>
                <ul>
                    <li>
                        <a href="https://unionlakepetservices.com/blog/yes-its-possible-6-tips-for-cat-grooming-at-home" class="care-link" target="_blank">Union Lake</a>
                    </li>
                    <li>
                        <a href="https://www.aspca.org/pet-care/cat-care/cat-grooming-tips" class="care-link" target="_blank">ASCPA</a>
                    </li>
                    <li>
                        <a href="https://pets.webmd.com/cats/guide/cat-grooming" class="care-link" target="_blank">Pets WebMD</a>
                    </li>
                </ul><br>

                <h2>Litter box</h2>
                <p>The litter box is the essential cat owner item, but they can be quite messy to handle. Here's how you can:</p>
                <ul>
                    <li>
                        <a href="https://www.petsbest.com/blog/cat-litter-box-tips-tricks/" class="care-link" target="_blank">Pets Best</a>
                    </li>
                    <li>
                        <a href="https://www.purina.ca/articles/cat/litter/cat-litter-box-tips" class="care-link" target="_blank">Purina</a>
                    </li>
                    <li>
                        <a href="https://www.vetcarepethospital.ca/litter-box-tips-tricks/" class="care-link" target="_blank">Vet Care Pet Hospital</a>
                    </li>
                </ul>


                
            </div>

        </div>

        <!--Footer-->
        <?php
        include "footer.php";
        ?>
            

    </body>


</html>