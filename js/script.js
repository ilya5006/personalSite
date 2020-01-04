let pagesNavs = document.querySelectorAll('.page_nav');

pagesNavs.forEach((pageNav) =>
{
    // Переключение страниц
    pageNav.addEventListener('click', (event) => 
    {
        let currentPageNav = document.querySelector('.current_page');
        let currentPageNavId = currentPageNav.getAttribute('id');
        let currentPageNavName = currentPageNavId.substr(0, currentPageNavId.length - 4);

        let currentPage = document.querySelector(`#${currentPageNavName}_page`);
        currentPage.classList.add('hide_page');
        currentPageNav.classList.remove('current_page');

        let chosePageNav = event.target;
        let chosePageNavId = chosePageNav.getAttribute('id');
        let chosePageNavName = chosePageNavId.substr(0, chosePageNavId.length - 4);
        
        let chosePage = document.querySelector(`#${chosePageNavName}_page`);
        chosePage.classList.remove('hide_page');
        chosePageNav.classList.add('current_page');
    });
});