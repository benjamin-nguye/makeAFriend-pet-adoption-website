function validateGiveaway() {
    const dogCatChoice = document.getElementsByName("dog-cat-choice");
    const breed = document.getElementById('breed');
    const age = document.getElementById('age');
    const gender = document.getElementById('gender');
    const getsAlongDog = document.getElementsByName("along-dog");
    const getsAlongCat = document.getElementsByName("along-cat");
    const getsAlongFamily = document.getElementsByName("along-family");
    const name = document.getElementById("current-name");
    const email = document.getElementById("owner-email");

    


    if (!(dogCatChoice[0].checked || dogCatChoice[1].checked)) {
        alert("Must select one of Dog or Cat");
        return false;
    }

    else if (breed.value == "") {
        alert("Must select a breed");
        return false;
    }

    else if ((/^dog/.test(breed.value) && dogCatChoice[1].checked) || (/^cat/.test(breed.value) && dogCatChoice[0].checked)) {
        alert("Must match selected animal with correct breed (cannot select cat and dog breed, or vice-versa");
        return false;
    }

    else if (age.value == "") {
        alert("Must select age range");
        return false;
    }

    else if (gender.value == "") {
        alert("Must select pet gender");
        return false;
    }

    else if (!(getsAlongDog[0].checked || getsAlongDog[1].checked)) {
        alert("Must specify whether or not pet gets along with (other) dogs");
        return false;
    }

    else if (!(getsAlongCat[0].checked || getsAlongCat[1].checked)) {
        alert("Must specify whether or not pet gets along with (other) cats");
        return false;
    }

    else if (!(getsAlongFamily[0].checked || getsAlongFamily[1].checked)) {
        alert("Must specify whether or not pet is suitable for a family with small children");
        return false;
    }

    else if (name.value == ""){
        alert("Must enter current name of the pet");
        return false;
    }

    else if (email.value == "") {
        alert("Must enter email");
        return false;
    }

    // doesnt work yet
    else if (!(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email.value))) {
        alert("Must enter a valid email");
        return false;
    }



    

    
}