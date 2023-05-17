<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Find a Dog/Cat</title>

        <link rel="stylesheet" href="styles/general.css">
        <link rel="stylesheet" href="styles/survey.css">
        <link rel="stylesheet" href="styles/sidebar.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4dd50b44b2.js" crossorigin="anonymous"></script>
        <script src="scripts/time.js" defer></script>
        <script src="scripts/find-a-pet-validation.js" defer></script>
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
                    <a href="contact.php" class="sidebar-link">Contact Us</a>
                </div>    
            </div>

            <div class="content find-content">

                <h1>Let's find you a friend!</h1>
                <p>Fill in the characteristics of your perfect friend and we'll show you who your dream pet is!</p>


                <form action="process-find.php" onsubmit="return validateInputs()" id="find-pet-form" name="find-pet-form" method="post">
                    
                    <fieldset>
                        <legend>
                            First of all, are you looking for a dog or a cat?
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
                            What breed(s) interest(s) you? (Select all that apply)
                        </legend>
                
                        <p>Dog Breeds:</p>
    
                        <input type="checkbox" name="dog-breed" id="labrador-retriever" value="dog-Labrador-Retriever"><label for="labrador-retriever" class="breed-label">Labrador Retriever</label>
                        <input type="checkbox" name="dog-breed" id="french-bulldog" value="dog-French-Bulldog"><label for="french-bulldog" class="breed-label">French Bulldog</label>
                        <input type="checkbox" name="dog-breed" id="golden-retriever" value="dog-Golden-Retriever"><label for="golden-retriever" class="breed-label">Golden Retriever</label>
                        <input type="checkbox" name="dog-breed" id="german-shepherd" value="dog-German-Shepherd"><label for="german-shepherd" class="breed-label">German Shepherd</label>
                        <input type="checkbox" name="dog-breed" id="poodle" value="dog-Poodle"><label for="poodle" class="breed-label">Poodle</label><br>
                        <input type="checkbox" name="dog-breed" id="bulldog" value="dog-Bulldog"><label for="bulldog" class="breed-label">Bulldog</label>
                        <input type="checkbox" name="dog-breed" id="beagle" value="dog-Beagle"><label for="beagle" class="breed-label">Beagle</label>
                        <input type="checkbox" name="dog-breed" id="rottweiler" value="dog-Rottweiler"><label for="rottweiler" class="breed-label">Rottweiler</label>
                        <input type="checkbox" name="dog-breed" id="german-shorthaired-pointer" value="dog-German-Shorthaired-Pointer"><label for="german-shorthaired-pointer" class="breed-label">German Shorthaired Pointer</label>
                        <input type="checkbox" name="dog-breed" id="dachshund" value="dog-Dachshund"><label for="dachshund" class="breed-label">Dachschund</label><br>
                        <input type="checkbox" name="dog-breed" id="other-dog" value="other-dog"><label for="other-dog" class="breed-label">Other</label><br>
    
                        <p style="margin-top:30px;">Cat Breeds:</p>
    
                        <input type="checkbox" name="cat-breed" id="siamese" value="cat-Siamese"><label for="siamese" class="breed-label">Siamese</label>
                        <input type="checkbox" name="cat-breed" id="persian" value="cat-Persian"><label for="persian" class="breed-label">Persian</label>
                        <input type="checkbox" name="cat-breed" id="maine-coon" value="cat-Maine-Coon"><label for="maine-coon" class="breed-label">Maine Coon</label>
                        <input type="checkbox" name="cat-breed" id="ragdoll" value="cat-Ragdoll"><label for="ragdoll" class="breed-label">Ragdoll</label>
                        <input type="checkbox" name="cat-breed" id="bengal" value="cat-Bengal"><label for="bengal" class="breed-label">Bengal</label><br>
                        <input type="checkbox" name="cat-breed" id="abyssinian" value="cat-Abyssinian"><label for="abyssinian" class="breed-label">Abyssinian</label>
                        <input type="checkbox" name="cat-breed" id="american-shorthaired" value="cat-American-Shorthaired"><label for="american-shorthaired" class="breed-label">American Shorthaired</label>
                        <input type="checkbox" name="cat-breed" id="oriental-shorthaired" value="cat-Oriental-Shorthaired"><label for="oriental-shorthaired" class="breed-label">Oriental Shorthaired</label>
                        <input type="checkbox" name="cat-breed" id="sphynx" value="cat-Sphynx"><label for="sphynx" class="breed-label">Sphynx</label>
                        <input type="checkbox" name="cat-breed" id="exotic" value="cat-Exotic"><label for="exotic" class="breed-label">Exotic Shorthaired</label><br>
                        <input type="checkbox" name="cat-breed" id="other-cat" value="other-cat"><label for="other-cat" class="breed-label">Other</label><br>
    
                        <br>
                        <input type="checkbox" name="doesnt-matter" id="doesnt-matter" value="doent-matter"><label for="doesnt-matter" class="breed-label">I don't mind</label>
                        <br><br><br>
                    </fieldset>

                    
                    <fieldset>
                        <legend>
                            Other Information
                        </legend>
                        
                        <label for="age" class="breed-label">How old would you prefer your pet?</label>
                        <select name="age" id="age">
                            <option value="">-- Please select an age category --</option>
                            <option value="under-3-months">3 months old and under</option>
                            <option value="3-to-6-months">Between 3 and 6 months old</option>
                            <option value="6-months-to-1-year">Between 6 months and 1 year old</option>
                            <option value="1-to-2-year">Between 1 and 2 years old</option>
                            <option value="2-to-4-year">Between 2 and 4 years old</option>
                            <option value="over-4-years">Over 4 years old</option>
                            <option value="doesnt-matter">I don't mind</option>
                        </select>
    
                        <br><br>
    
                        <label for="gender" class="breed-label">Preferred Gender?</label>
                        <select name="gender" id="gender">
                            <option value="">-- Please select a gender --</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="doesnt-matter">I don't mind</option>
                        </select>
    
                        <br><br>
    
                        <label for="get-along" class="breed-label">Does the pet need to get along with other pets and/or small children?</label>
                        <select name="get-along" id="get-along">
                            <option value="">-- Pleaser select an option --</option>
                            <option value="yes">Yes</option>
                            <option value="doesnt-matter">I don't mind</option>
                        </select>
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
            

    </body>


</html>