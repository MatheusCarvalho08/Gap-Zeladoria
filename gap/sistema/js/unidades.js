
/*===== FILTRAR ELEMENTOS =====*/
function filterElements(category){
    const elements = document.querySelectorAll(".box");

    elements.forEach((element) => {
        element.classList.remove("show");
        if(category === "Todos" || element.classList.contains(category)) {
            element.classList.add("show");
        }
    });
}

/*===== ACTIVE DO FILTRO =====*/
const buttons = document.querySelectorAll('.filter-btns button')
buttons.forEach(option => {
    option.addEventListener('click', () => {
        document.querySelector('button.active-btn').classList.remove('active-btn')
        option.classList.add('active-btn');
    })
})

/*===== MENU =====*/
const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})

