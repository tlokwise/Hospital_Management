window.addEventListener('load', event=>{
    
})

let listItem = document.querySelectorAll('.nav-list li');
listItem.forEach(element => {
    element.addEventListener('click', ()=>{
        alert("list item clicked");
    })
});