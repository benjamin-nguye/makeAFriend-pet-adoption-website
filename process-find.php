
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Find a Pet</title>

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
                <div class="sidebar-button active">
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

                <?php

                    $dog_cat_choice = $_POST['dog-cat-choice'];
                    if (isset($_POST['dog-breed'])) $breed = $_POST['dog-breed'];
                    else if (isset($_POST['cat-breed'])) $breed = $_POST['cat-breed'];

                    $age = $_POST['age'];
                    $gender = $_POST['gender'];
                    $get_along = $_POST['get-along'];
                    $file_name = "pet-information.txt";


                    $matches = 0;
                    if (file_exists($file_name)) {

                        $read = fopen($file_name, "r");
                        while (($line = fgets($read)) !== false) {

                            $info = explode(":", $line);
                            
                            
                            $match = true;
                            
                            if ($dog_cat_choice != $info[2]) $match = false;
                            if ($breed != "doesnt-matter") {
                                if ($breed != $info[3]) $match = false;
                            }
                            if ($age != "doesnt-matter") {
                                if ($age != $info[4]) $match = false;
                            }
                            if ($gender != "doesnt-matter") {
                                if ($gender != $info[5]) $match = false;
                            }
                            if ($get_along != "doesnt-matter") {
                                if ( ! ($get_along == $info[6] && $get_along == $info[7] && $get_along == $info[8])) $match = false;
                            }

                            if ($match == true) {
                                $matches += 1;
                                ?>
                                <h4><?php echo $info[10] . "<br>"; ?></h4>
                                <p>
                                    <?php 
                                    echo $info[2] . "<br>";
                                    echo "Breed: ". $info[3] . "<br>";
                                    echo "Age: " . $info[4] . "<br>";
                                    echo "Gender: " . $info[5] . "<br>";
                                    echo "Gets along with dogs: " . $info[6] . "<br>";
                                    echo "Gets along with cats: " . $info[7] . "<br>";
                                    echo "Gets along with children: " . $info[8] . "<br>";
                                    ?>
                                </p>
                            <?php } 
                        }

                        fclose($read);

                    }
                    
                    if ($matches == 0) {
                        echo "No animals match criteria";
                    } 
                ?>
            

            </div>

        </div>

        <!--Footer-->
        <?php
        include "footer.php";
        ?>
            
        
    </body>


</html>