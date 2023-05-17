<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dog Care</title>

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
                <div class="sidebar-button active">
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

            <div class="content dog-care-content">

                <h1>make<span style="color:rgb(255, 204, 0);font-weight:500;">A</span>friend's dog caring tips</h1>

                <p>Need something to refresh your mind? Here are some of our most helpful dog caring tips and tricks.</p>

                <img src="https://media.istockphoto.com/id/1220107823/photo/were-best-friends.jpg?s=612x612&w=0&k=20&c=pVDCMWDo3fsnyQKg6Zyr7esXrDENVlPw-_8_4mzSGQw="
                alt="https://media.istockphoto.com/id/1220107823/photo/were-best-friends.jpg?s=612x612&w=0&k=20&c=pVDCMWDo3fsnyQKg6Zyr7esXrDENVlPw-_8_4mzSGQw=" id="dog-care-img">
                <p class="image-credit">Picture from iStock</p><br>

                <h2>Feeding</h2>
                <p>Here are a few resources to help you with feeding your dog:</p>
                <ul>
                    <li>
                        <a href="https://www.foundanimals.org/best-dog-food/" class="care-link" target="_blank">foundanimals.org</a>
                    </li>
                    <li>
                        <a href="https://www.thesprucepets.com/dog-food-basics-1118454" class="care-link" target="_blank">the Spruce Pets</a>
                    </li>
                    <li>
                        <a href="https://www.aspca.org/pet-care/dog-care/dog-nutrition-tips" class="care-link" target="_blank">ASCPA</a>
                    </li>
                </ul><br>

                <h2>Grooming</h2>
                <p>Gotta keep em clean! Here's how:</p>
                <ul>
                    <li>
                        <a href="https://mypetandi.elanco.com/au/health/seven-tips-grooming-your-dog-home" class="care-link" target="_blank">my pet and I</a>
                    </li>
                    <li>
                        <a href="https://nymag.com/strategist/article/how-to-groom-a-dog.html" class="care-link" target="_blank">The Strategist</a>
                    </li>
                    <li>
                        <a href="https://www.aspca.org/pet-care/dog-care/dog-grooming-tips" class="care-link" target="_blank">ASCPA</a>
                    </li>
                </ul><br>

                <h2>Exercise</h2>
                <p>Here are a few resources to help you move with your dog:</p>
                <ul>
                    <li>
                        <a href="https://www.akc.org/expert-advice/health/how-much-exercise-does-dog-need/" class="care-link" target="_blank">American Kennel Club</a>
                    </li>
                    <li>
                        <a href="https://www.hillspet.com/dog-care/play-exercise/exercise-and-game-ideas-for-dogs" class="care-link" target="_blank">Hill's pet</a>
                    </li>
                    <li>
                        <a href="https://www.purina.ca/articles/dog/activities/small-dog-exercise-tips" class="care-link" target="_blank">Purina</a>
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