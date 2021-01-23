// JavaScript code 
function rechercher() { 
    let input = document.getElementById('search_bar').value 
    input = input.toLowerCase(); 
    let x = document.getElementsByClassName('mot'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none"; 
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
} 
