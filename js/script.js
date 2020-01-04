let getPageNavName = (pageNavDOM) =>
{
    let pageNavId = pageNavDOM.getAttribute('id');
    let pageNavName = pageNavId.substr(0, pageNavId.length - 4);

    return pageNavName;
}

let pagesNavs = document.querySelectorAll('.page_nav');

pagesNavs.forEach((pageNav) =>
{
    // Переключение страниц
    pageNav.addEventListener('click', (event) => 
    {
        let currentPageNav = document.querySelector('.current_page');
        let currentPageNavName = getPageNavName(currentPageNav);

        let currentPage = document.querySelector(`#${currentPageNavName}_page`);
        currentPage.classList.add('hide_page');
        currentPageNav.classList.remove('current_page');

        let chosePageNav = event.target;
        let chosePageNavName = getPageNavName(chosePageNav);
        
        let chosePage = document.querySelector(`#${chosePageNavName}_page`);
        chosePageNav.classList.add('current_page');
        chosePage.classList.remove('hide_page');
    });
});