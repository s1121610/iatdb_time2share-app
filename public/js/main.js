const checkboxAutos = document.getElementById("Autos");
const checkboxCamperen = document.getElementById("Camperen");
const checkboxOpbergmatriaal = document.getElementById("Opbergmatriaal");
const checkboxOverig = document.getElementById("Overig");
const checkboxElektronica = document.getElementById("Elektronica");
const checkboxPartybenodigdheden = document.getElementById("Partybenodigdheden");
const checkboxGereedschap = document.getElementById("Gereedschap");
const checkboxTweewielers = document.getElementById("Tweewielers");
const checkboxKleding = document.getElementById("Kleding");
const filterButton = document.getElementById("filter-section__button");


let list_of_items = document.getElementsByTagName("li");

for(let i = 0; i < list_of_items.length; i++){
    list_of_items[i].style.display = "";
}

const filter = document.getElementById("js--filterSection");

function showFilter(){
    filter.style.display = "grid";
    filterButton.setAttribute("onclick", "closeFilter()");

    checkboxAutos.checked = true;
    checkboxCamperen.checked = true;
    checkboxOpbergmatriaal.checked = true;
    checkboxOverig.checked = true;
    checkboxElektronica.checked = true;
    checkboxPartybenodigdheden.checked = true;
    checkboxGereedschap.checked = true;
    checkboxTweewielers.checked = true;
    checkboxKleding.checked = true;

    checkboxAutos.addEventListener('change', function(){
        if(checkboxAutos.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Autos'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Autos'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxCamperen.addEventListener('change', function(){
        if(checkboxCamperen.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Camperen'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Campeerbenodigdheden'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxOpbergmatriaal.addEventListener('change', function(){
        if(checkboxOpbergmatriaal.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Opbergmatriaal'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Opbergmatriaal'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });


    checkboxOverig.addEventListener('change', function(){
        if(checkboxOverig.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Overig'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Overig'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxElektronica.addEventListener('change', function(){
        if(checkboxElektronica.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Elektronica'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Elektronica'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxPartybenodigdheden.addEventListener('change', function(){
        if(checkboxPartybenodigdheden.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Partybenodigdheden'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Partybenodigdheden'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxGereedschap.addEventListener('change', function(){
        if(checkboxGereedschap.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Gereedschap'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Gereedschap'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxTweewielers.addEventListener('change', function(){
        if(checkboxTweewielers.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Tweewielers'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Tweewielers'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });

    checkboxKleding.addEventListener('change', function(){
        if(checkboxKleding.checked){
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productKleding == 'Kleding'){
                    list_of_items[i].style.display = '';
                }
            }
        }   
        else{
            for(let i = 0; i < list_of_items.length; i++){
                if(list_of_items[i].dataset.productCategory == 'Kleding'){
                    list_of_items[i].style.display = 'none';
                }
            }
        } 
    });
}

function closeFilter(){
    filter.style.display = "none";
    filterButton.setAttribute("onclick", "showFilter()");
}
    

//---------------------------------------- ZOEKFUNCTIE --------------------------------
const searchbarV = document.getElementById("js--searchbar");

function searchbar(){
    const searchbar = document.getElementById("js--searchbar");
    const itemsList = document.getElementsByClassName("GridCard");
    const message = document.getElementById("js--message");
    searchbar.onkeyup = (event) => {
        let filter = event.target.value.toUpperCase();
        message.style.display = "none";
        if(filter !== "SRC" && filter !== "ALT" && filter !== "CLASS" && filter !== "DATA-"){
            for(let i = 0; i < itemsList.length; i++){
                let innerHTML = itemsList[i].innerHTML.toUpperCase();
                if(innerHTML.indexOf(filter) !== -1){
                    message.style.display = "none";
                    itemsList[i].style.display = "";
                }
                else{
                    message.style.display = "none";
                    itemsList[i].style.display = "none";
                }
            }
        }else{
            for(let i = 0; i < itemsList.length; i++){
                itemsList[i].style.display = "none";
                itemsList[i].style.display = "none";
            }
        }
    };
}