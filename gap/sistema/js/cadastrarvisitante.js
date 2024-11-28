const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})




document.querySelectorAll('input[name="table_select"]').forEach((radio) => {
    radio.addEventListener('change', function() {
        document.querySelectorAll('.main').forEach((content) => {
            content.classList.remove('active');
        });

        const selectedTableContent = document.querySelector(`.main .pedestre_veiculo#${this.value}`).closest('.main');
        selectedTableContent.classList.add('active');
    });
});