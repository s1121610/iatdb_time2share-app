let checkboxMaki = document.getElementById("Maki");
let checkboxTemaki = document.getElementById("Temaki");
let checkboxUramaki = document.getElementById("Uramaki");
let checkboxSashimi = document.getElementById("Sashimi");
let checkboxNigiri = document.getElementById("Nigiri");

let list_of_sushi = document.getElementsByTagName("li");

for(let i = 0; i < list_of_sushi.length; i++){
    list_of_sushi[i].style.display = "";
}

checkboxMaki.checked = true;
checkboxNigiri.checked = true;
checkboxSashimi.checked = true;
checkboxTemaki.checked = true;
checkboxUramaki.checked = true;



checkboxMaki.addEventListener('change', function(){
    if(checkboxMaki.checked){
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Maki'){
                list_of_sushi[i].style.display = '';
            }
        }
    }   
    else{
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Maki'){
                list_of_sushi[i].style.display = 'none';
            }
        }
    } 
});

checkboxTemaki.addEventListener('change', function(){
    if(checkboxTemaki.checked){
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Temaki'){
                list_of_sushi[i].style.display = '';
            }
        }
    }   
    else{
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Temaki'){
                list_of_sushi[i].style.display = 'none';
            }
        }
    } 
});

checkboxUramaki.addEventListener('change', function(){
    if(checkboxUramaki.checked){
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Uramaki'){
                list_of_sushi[i].style.display = '';
            }
        }
    }   
    else{
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Uramaki'){
                list_of_sushi[i].style.display = 'none';
            }
        }
    } 
});

checkboxSashimi.addEventListener('change', function(){
    if(checkboxSashimi.checked){
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Sashimi'){
                list_of_sushi[i].style.display = '';
            }
        }
    }   
    else{
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Sashimi'){
                list_of_sushi[i].style.display = 'none';
            }
        }
    } 
});

checkboxNigiri.addEventListener('change', function(){
    if(checkboxNigiri.checked){
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Nigiri'){
                list_of_sushi[i].style.display = '';
            }
        }
    }   
    else{
        for(let i = 0; i < list_of_sushi.length; i++){
            if(list_of_sushi[i].dataset.kindOfSushi == 'Nigiri'){
                list_of_sushi[i].style.display = 'none';
            }
        }
    } 
});
