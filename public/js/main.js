// const checkboxMaki = document.getElementById("Maki");
// const checkboxTemaki = document.getElementById("Temaki");
// const checkboxUramaki = document.getElementById("Uramaki");
// const checkboxSashimi = document.getElementById("Sashimi");
// const checkboxNigiri = document.getElementById("Nigiri");

// let list_of_sushi = document.getElementsByTagName("li");

// for(let i = 0; i < list_of_sushi.length; i++){
//     list_of_sushi[i].style.display = "";
// }

// checkboxMaki.checked = true;
// checkboxNigiri.checked = true;
// checkboxSashimi.checked = true;
// checkboxTemaki.checked = true;
// checkboxUramaki.checked = true;



// checkboxMaki.addEventListener('change', function(){
//     if(checkboxMaki.checked){
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Maki'){
//                 list_of_sushi[i].style.display = '';
//             }
//         }
//     }   
//     else{
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Maki'){
//                 list_of_sushi[i].style.display = 'none';
//             }
//         }
//     } 
// });

// checkboxTemaki.addEventListener('change', function(){
//     if(checkboxTemaki.checked){
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Temaki'){
//                 list_of_sushi[i].style.display = '';
//             }
//         }
//     }   
//     else{
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Temaki'){
//                 list_of_sushi[i].style.display = 'none';
//             }
//         }
//     } 
// });

// checkboxUramaki.addEventListener('change', function(){
//     if(checkboxUramaki.checked){
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Uramaki'){
//                 list_of_sushi[i].style.display = '';
//             }
//         }
//     }   
//     else{
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Uramaki'){
//                 list_of_sushi[i].style.display = 'none';
//             }
//         }
//     } 
// });

// checkboxSashimi.addEventListener('change', function(){
//     if(checkboxSashimi.checked){
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Sashimi'){
//                 list_of_sushi[i].style.display = '';
//             }
//         }
//     }   
//     else{
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Sashimi'){
//                 list_of_sushi[i].style.display = 'none';
//             }
//         }
//     } 
// });

// checkboxNigiri.addEventListener('change', function(){
//     if(checkboxNigiri.checked){
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Nigiri'){
//                 list_of_sushi[i].style.display = '';
//             }
//         }
//     }   
//     else{
//         for(let i = 0; i < list_of_sushi.length; i++){
//             if(list_of_sushi[i].dataset.kindOfSushi == 'Nigiri'){
//                 list_of_sushi[i].style.display = 'none';
//             }
//         }
//     } 
// });

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