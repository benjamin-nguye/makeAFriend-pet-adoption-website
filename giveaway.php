<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Listing</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/survey.css">
        <link rel="stylesheet" href="styles/sidebar.css">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4dd50b44b2.js" crossorigin="anonymous"></script>
        <script src="scripts/time.js" defer></script>
        <script src="scripts/giveaway.js" defer></script>
    </head>

    <body>
        
        <?php
        session_start();
        if ( ! isset($_SESSION['user'])) {
            include('login.php');
        }
        else { ?>

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
                <div class="sidebar-button active">
                    <a href="giveaway.php" class="sidebar-link">Have a pet to give away?</a>
                </div>
                <div class="sidebar-button">
                    <a href="logout.php" class="sidebar-link">Log Out</a>
                </div> 
                <div class="sidebar-button">
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <div class="content find-content">

                

                <h1>Have a pet you have to part ways with?</h1>
                <p>Fill in the listing form and we'll take care of the rest.</p>


                <form action="process-giveaway.php" onsubmit = "return validateGiveaway()" method="post">
                    
                    <fieldset>
                        <legend>
                            Are you signing up a dog or a cat?
                        </legend>

                        <div class="dog-cat">
    
                            <label>
                                <input type="radio" value="dog" id="dog-choice" name="dog-cat-choice">
                                    <div class="radio-btn">
                                        <img src="icons/dog.png" class="radio-btn-img" alt="https://www.flaticon.com/free-icon/dog_3069153?term=dog&related_id=3069153">
                                        <p style="margin:0;">Dog</p>
                                    </div>
                            </label>
                            
                            <label>
                                <input type="radio" value="cat" id="cat-choice" name="dog-cat-choice">
                                    <div class="radio-btn">
                                        <img src="icons/cat.png" class="radio-btn-img" alt="https://www.flaticon.com/free-icon/cat_2138241?term=cat&page=1&position=22&origin=search&related_id=2138241">
                                        <p style="margin:0;">Cat</p>
                                    </div>    
                            </label>
                    
                        </div>
                    </fieldset>
                    <p style="font-size:8px;margin-top:-15px;">Icons from flaticons.com</p>
                    
                  
                    <fieldset>
                        <legend>
                            Answer these questions to complete the listing
                        </legend>

                        <label for="breed" class="giveaway-labels">What breed is the animal?</label>

                        <select name="breed" id="breed">

                            <option value="">-- Please Select an Option --</option>
                            <optgroup label="Dog Breeds">
                                <option value="dog-Labrador-Retriever">Labrador Retriever</option>
                                <option value="dog-French-Bulldog">French Bulldog</option>
                                <option value="dog-Golden-Retriever">Golden Retriever</option>
                                <option value="dog-German-Shepherd">German Shepherd</option>
                                <option value="dog-Poodle">Poodle</option>
                                <option value="dog-Bulldog">Bulldog</option>
                                <option value="dog-Beagle">Beagle</option>
                                <option value="dog-Rottweiler">Rottweiler</option>
                                <option value="dog-German-Shorthaired-Pointer">German Shorthaired Pointer</option>
                                <option value="dog-Dachshund">Dachshund</option>
                            </optgroup>

                            <optgroup label="Cat Breeds">
                                <option value="cat-Siamese">Siamese</option>
                                <option value="cat-Persian">Persian</option>
                                <option value="cat-Maine-Coon">Maine Coon</option>
                                <option value="cat-Ragdoll">Ragdoll</option>
                                <option value="cat-Bengal">Bengal</option>
                                <option value="cat-Abyssinian">Abyssinian</option>
                                <option value="cat-American-Shorthaired">American Shorthaired</option>
                                <option value="cat-Oriental-Shorthaired">Oriental Shorthaired</option>
                                <option value="cat-Sphynx">Sphynx</option>
                                <option value="cat-Exotic">Exotic Shorthaired</option>
                            </optgroup>

                            <optgroup label="Other">
                                <option value="mix">Mixed Breed</option>
                            </optgroup>
                            
                        </select><br><br>

                        <label for="age" class="giveaway-labels">How old is the pet?</label>
                        <select name="age" id="age">
                            <option value="">-- Please select an age category --</option>
                            <option value="under-3-months">3 months old and under</option>
                            <option value="3-to-6-months">Between 3 and 6 months old</option>
                            <option value="6-months-to-1-year">Between 6 months and 1 year old</option>
                            <option value="1-to-2-year">Between 1 and 2 years old</option>
                            <option value="2-to-4-year">Between 2 and 4 years old</option>
                            <option value="over-4-years">Over 4 years old</option>
                        </select>

                        <br><br>

                        <label for="gender" class="giveaway-labels">Gender?</label>
                        <select name="gender" id="gender">
                            <option value="">-- Please select a gender --</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                        </select>

                        <br><br>

                        <p><span class="giveaway-labels">Gets along with (other) dogs?</span>
                        <input type="radio" name="along-dog" id="along-dog-yes" value="yes"><label for="along-dog-yes" class="breed-label">Yes</label>
                        <input type="radio" name="along-dog" id="along-dog-no" value="no"><label for="along-dog-no" class="breed-label">No</label>
                        </p>

                        <p><span class="giveaway-labels">Gets along with (other) cats?</span>
                        <input type="radio" name="along-cat" id="along-cat-yes" value="yes"><label for="along-cat-yes" class="breed-label">Yes</label>
                        <input type="radio" name="along-cat" id="along-cat-no" value="no"><label for="along-cat-no" class="breed-label">No</label>
                        </p>

                        <p><span class="giveaway-labels">Suitable for a family with small children?</span>
                        <input type="radio" name="along-family" id="along-family-yes" value="yes"><label for="along-family-yes" class="breed-label">Yes</label>
                        <input type="radio" name="along-family" id="along-family-no" value="no"><label for="along-family-no" class="breed-label">No</label>
                        </p>

                        <label for="comments" class="giveaway-labels">Comments</label><br>
                        <textarea name="comments" id="comments" cols="50" rows="10" style="font-family:Poppins"></textarea>
                        
                        <br><br>

                        <label for="current-name" class="giveaway-labels">Their current name: </label>
                        <input type="text" name="current-name" id="current-name" placeholder="name" style="font-family:Poppins; width:200px;" >

                        <br><br>

                        <label for="owner-email" class="giveaway-labels">Your email: </label>
                        <input type="text" name="owner-email" id="owner-email" placeholder="your@email.com" style="font-family:Poppins; width:200px;">


                    </fieldset>

                    <div class="buttons">
                        <button type="submit" id="submit-btn" class="form-btns">Submit</button>
                        <button type="reset" id="reset-btn" class="form-btns">Reset</button>
                    </div>

                </form>
                
            </div>

        </div>

        <!--Footer-->
        <?php
        include "footer.php";
        ?>
            
    
    <?php } ?>
    </body>


</html>