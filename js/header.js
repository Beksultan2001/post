const menu = document.querySelector('.menu');
const mainmenu = document.querySelector('.mainmenu');
const btn = document.querySelector('.menu_btn');
const each = document.querySelectorAll('.menu_add li');



btn.addEventListener('click', () =>{

    menu.classList.toggle('active');
    
    
})


each.forEach((t) =>{

    t.addEventListener('click',(k) =>{

        menu.classList.remove('active');

    })
    
})
