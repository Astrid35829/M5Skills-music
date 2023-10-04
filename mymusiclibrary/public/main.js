

dropdown = document.getElementById("js-dropdown");
dropdownOptions = document.getElementById("js--dropdownOptions");
dropdown.onclick = function(){
    dropdownOptions.style.display = "block";
}

const dropdownClose = document.getElementById("js--dropdown-close");
dropdownClose.onclick = function(){
    dropdownOptions.style.display = "none";
}

const allProduct = document.getElementsByClassName("song");
const dropdown1 = document.getElementById("js--dropdown-1");
const dropdown2 = document.getElementById("js--dropdown-2");
const dropdown3 = document.getElementById("js--dropdown-3");
const dropdownAll = document.getElementById("js--dropdown-all");

dropdown1.onclick = function(){
    for(let i=0; 1 < allProduct.length; i++){
        if(allProduct[i].dataset.category === "rock"){
            allProduct[i].style.display = "flex";
        }
        else{
            if(allProduct[i].dataset.category === "pop"){
                allProduct[i].style.display = "none";
            }
            if(allProduct[i].dataset.category === "EDM"){
                allProduct[i].style.display = "none";
            }
        }
    }
}

dropdown2.onclick = function(){
    for(let i=0; 1 < allProduct.length; i++){
        if(allProduct[i].dataset.category === "pop"){
            allProduct[i].style.display = "flex";
        }
        else{
            if(allProduct[i].dataset.category === "rock"){
                allProduct[i].style.display = "none";
            }
            if(allProduct[i].dataset.category === "EDM"){
                allProduct[i].style.display = "none";
            }
        }
    }
}

dropdown3.onclick = function(){
    for(let i=0; 1 < allProduct.length; i++){
        if(allProduct[i].dataset.category === "EDM"){
            allProduct[i].style.display = "flex";
        }
        else{
            if(allProduct[i].dataset.category === "pop"){
                allProduct[i].style.display = "none";
            }
            if(allProduct[i].dataset.category === "rock"){
                allProduct[i].style.display = "none";
            }
        }
    }
}

dropdownAll.onclick = function(){
    for(let i = 0; i < allProduct.length; i++){
        allProduct[i].style.display = "flex";
    }
}

//searchbar
searchBar = document.getElementById("js--searchBar");
searchBar.onkeyup = function(event){
    if(event.keyCode === 13){
        let searchTerm = searchBar.value.toUpperCase().split(" ").join("");
        for(i = 0; i < allProduct.length; i++){
           if(allProduct[i].dataset.title.search(searchTerm) === -1){
            allProduct[i].style.opacity = 0.3;
           }
           else{
            allProduct[i].style.opacity = 1;
           }
        }
    }
}