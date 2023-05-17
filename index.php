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
                <div class="sidebar-button active">
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
                    <a href="logout.php" class="sidebar-link">Log Out</a>
                </div> 
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <!-- Specific page content -->
            <div class="content home-content">

                <h1 style="font-weight:500">Welcome to make<span style="color:rgb(255, 204, 0);font-weight:500;">A</span>friend!</h1>

                <p>make<span style="color:rgb(255, 204, 0);font-weight:500;">A</span>friend is your one stop shop for pet adoption. Here, you can :</p>

                <ul>
                    <li>List a pet for adoption.</li>
                    <li>Browse furry friends other people have put for adoption.</li>
                </ul><br>

                <div class="grid-container">
                    <div class="home-grid">
                    
                        <div class="grid-tab grid-tab-1">
                            
                            <a href="browse.php" class="grid-link">
                                <img src="https://www.flytap.com/-/media/Flytap/new-tap-pages/travelling-with-animals/pets/flying-with-pets-og-image-1200x630.jpg"
                                alt="https://www.flytap.com/-/media/Flytap/new-tap-pages/travelling-with-animals/pets/flying-with-pets-og-image-1200x630.jpg"
                                class="tab-image">
                                <div class="text text-1">Browse</div>
                            </a>
                        </div>
    
                        <div class="grid-tab grid-tab-2">
                            
                            <a href="giveaway.php" class="grid-link">
                                <img src="https://www.portphillip.vic.gov.au/media/l4bc2xgo/copp_local-laws_pets-of-port-phillip_web-banner_0622.jpg?center=0.57191619158284612,0.52646229440739711&mode=crop&width=710&height=710&rnd=133005394387900000" 
                                alt="https://www.portphillip.vic.gov.au/media/l4bc2xgo/copp_local-laws_pets-of-port-phillip_web-banner_0622.jpg?center=0.57191619158284612,0.52646229440739711&mode=crop&width=710&height=710&rnd=133005394387900000"
                                class="tab-image">
                                <div class="text text-2">List</div>
                            </a>
                        </div>
                    </div>
    
                </div>
                <p style="font-size:8px;margin-left:35px;">Images (from left to right): Flytap.com, City of Port Phillip </p>
                
                <br><br>

                <h2>Can't find the friend you're looking for?</h2>
                <p> 
                    Use our <a href="find-dog-cat.php" class="content-link">Dog/Cat Finder</a> to search through pets that correspond to your preferences!
                    If you still don't find the one, consider still giving one of the listed pets a look! You never know who you might fall in love with!
                </p>
                <br>
                

                <h2>Need some help?</h2>
                <p>
                    In case you ever have some questions regarding your pet, we offer tips on how to care for your <a href="dog-care.php" class="content-link">dog</a> and/or <a href="cat-care.php" class="content-link">cat</a>!
                </p><br>

                <h2>Still in a rut?</h2>
                <p>
                    See how you can <a href="contact.php" class="content-link">contact us</a> through our website.
                </p>

            </div>

        </div>

        <!--Footer-->
        <?php
        include "footer.php";
        ?>
            
        
    </body>


</html>