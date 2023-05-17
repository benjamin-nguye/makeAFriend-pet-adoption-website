const browsePage = document.getElementById('browsing-content');

let listOfPets = [
    {
        "dogCatChoice": "dog",
        "breed": "dog-Labrador-Retriever",
        "age": "under-3-months",
        "gender": "female",
        "getsAlongDog": "yes",
        "getsAlongCat": "no",
        "getsAlongFamily": "no",
        "comments": "Bella is an adorable cat. She loves to play, but mostly eat. She'll eat anything you put in front of her, whether she's actually hungry or not.",
        "name": "Bella",
        "image": "https://s.abcnews.com/images/US/puppy-zoey-ht-02-jpo-171027_4x3_992.jpg"
    },
    {
        "dogCatChoice": "cat",
        "breed": "cat-American-Shorthaired",
        "age": "6-months-to-1-year",
        "gender": "female",
        "getsAlongDog": "no",
        "getsAlongCat": "no",
        "getsAlongFamily": "yes",
        "comments": "",
        "name": "Boba",
        "image": "https://arc-anglerfish-arc2-prod-tbt.s3.amazonaws.com/public/MNWX7OWKHII6TODGIBWI6S7HAY.jpg"
    },
    {
        "dogCatChoice": "cat",
        "breed": "cat-Persian",
        "age": "over-4-years",
        "gender": "male",
        "getsAlongDog": "no",
        "getsAlongCat": "no",
        "getsAlongFamily": "no",
        "comments": "He likes lasagna and sleeping a bit too much",
        "name": "Garfield",
        "image": "https://www.cinemaclock.com/images/580x326/5/garfield_the_movie_2004_3558.jpg",
    },
    {
        "dogCatChoice": "dog",
        "breed": "dog-Bulldog",
        "age": "1-to-2-years",
        "gender": "male",
        "getsAlongDog": "yes",
        "getsAlongCat": "yes",
        "getsAlongFamily": "yes",
        "comments": "Beware, this dog is lovable but mischievous",
        "name": "Bones",
        "image": "https://preview.redd.it/rbecma6jxj0z.jpg?width=640&crop=smart&auto=webp&s=2ae46d932914381c622c57ab7ccfd0a33b1eff1c"
    },
]

for (let i = 0; i<listOfPets.length; i++) {

    // create fieldset, every pet is in a fieldset
    let petFieldset = document.createElement("fieldset");

    // create the fieldset legend, which is the pet's name
    let leg = document.createElement("legend");
    let legendText = document.createTextNode(listOfPets[i].name);
    leg.appendChild(legendText);
    leg.style.color = "rgb(127, 50, 155)";
    leg.style.fontSize = "18px";
    petFieldset.appendChild(leg);

    // style fieldset
    petFieldset.style.width = "85%";
    petFieldset.style.borderStyle = "solid";
    petFieldset.style.borderWidth = "2px";
    petFieldset.style.borderColor = "rgb(255, 204, 0)";
    petFieldset.style.borderRadius = "20px";
    petFieldset.style.margin = "20px";
    petFieldset.style.padding = "20px";
    petFieldset.style.boxShadow = "5px 5px 5px lightgray";

    // append fieldset to body
    browsePage.appendChild(petFieldset);

    // create flexbox inside fieldset to display content
    let container = document.createElement('div');
    petFieldset.appendChild(container);
    container.style.width = "100%";
    container.style.height = "100%";
    container.style.display = "flex";
    container.style.flexDirection = "row";

    // create image container
    let imageContainer = document.createElement('div');
    container.appendChild(imageContainer);

    imageContainer.style.flexBasis = "30%";

    const petImage = document.createElement('img');
    petImage.src = listOfPets[i].image;
    petImage.style.width = "90%";
    imageContainer.appendChild(petImage);
    


    // create description container
    let descriptionContainer = document.createElement('div');
    container.appendChild(descriptionContainer);
    descriptionContainer.style.flex = "1";
    descriptionContainer.style.paddingLeft = "10px";
    
    // display pet description
    descriptionContainer.innerHTML += "<span class=\"descriptionTitle\">Breed: </span><i>" + listOfPets[i].breed.replace(/-/g, " ").replace(/^dog /, "").replace(/^cat /, "") + "</i><br>";
    descriptionContainer.innerHTML += "<span class=\"descriptionTitle\">Age: </span><i>" + listOfPets[i].age.replace(/-/g, " ") + "</i><br>" ;
    descriptionContainer.innerHTML += "<span class=\"descriptionTitle\">Gender: </span><i>" + listOfPets[i].gender + "</i><br>" ;
    descriptionContainer.innerHTML += "<span class=\"descriptionTitle\">Gets along with (other) dogs: </span><i>" + listOfPets[i].getsAlongDog + "</i><br>" ;
    descriptionContainer.innerHTML += "<span class=\"descriptionTitle\">Gets along with (other) cats: </span><i>" + listOfPets[i].getsAlongCat + "</i><br>" ;
    descriptionContainer.innerHTML += "<span class=\"descriptionTitle\">Suitable for a family with small children: </span><i>" + listOfPets[i].getsAlongFamily + "</i>";
    
    // display comment, whether or not they have it
    if (!(listOfPets[i].comments == "")) {
        descriptionContainer.innerHTML += "<br><br><span class=\"comments\">\"" +listOfPets[i].comments +"\"</span>";
    }

    // create interested button
    let interestedBtn = document.createElement('button');
    interestedBtn.innerText = "Interested";

    interestedBtn.style.width = "100px";
    interestedBtn.style.height = "40px";
    interestedBtn.style.padding = "5px";
    interestedBtn.style.border = "thin solid gray";
    interestedBtn.style.borderRadius = "7px";

    descriptionContainer.innerHTML += "<br><br>";
    descriptionContainer.appendChild(interestedBtn);

    interestedBtn.addEventListener('click', () => {
        alert("This button does nothing yet.");
    })
    

}