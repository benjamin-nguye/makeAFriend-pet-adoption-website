
function validateInputs() {
    const dogCatChoice = document.getElementsByName("dog-cat-choice");
    const dogBreed = document.getElementsByName("dog-breed");
    const catBreed = document.getElementsByName("cat-breed");
    const doesntMatterBreed = document.getElementById("doesnt-matter");
    const age = document.getElementById('age');
    const gender = document.getElementById('gender');
    const getsAlong = document.getElementById('get-along');

    let dogBreedChecked = false;
    for (let i = 0; i<dogBreed.length; i++) {
        if (dogBreed[i].checked){
            dogBreedChecked = true;
            break;
        }
    }

    let catBreedChecked = false;
    for (let i = 0; i<catBreed.length; i++) {
        if (catBreed[i].checked){
            catBreedChecked = true;
            break;
        }
    }

    if (!(dogCatChoice[0].checked || dogCatChoice[1].checked)){
        alert("Please choose either Dog or Cat");
        return false;
    } 
    else if ((dogCatChoice[0].checked && catBreedChecked) || (dogCatChoice[1].checked && dogBreedChecked)) {
        alert("Must match dog or cat breed choices with selection of Cat or Dog.")
        return false;
    }
    else if (!(dogBreedChecked || catBreedChecked || doesntMatterBreed.checked)){
        alert("Must check at least one (1) breed of the corresponding animal OR check the \"Doesn't matter\" option");
        return false;
    }
    else if ((dogBreedChecked && doesntMatterBreed.checked) || (catBreedChecked && doesntMatterBreed.checked)){
        alert("Check \"Doesn't Matter\" option only if no breeds have been selected.");
        return false;
    }
    else if (age.value == ""){
        alert("Please select an age range");
        return false;
    }
    else if (gender.value == "") {
        alert("Please select a gender option");
        return false;
    }
    else if (getsAlong.value == "") {
        alert("Please state whether or not the pet should get along with other pets/children");
        return false;
    }
    else{
        return true;
    }
    

}



