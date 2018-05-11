setDimensions = function () {
    var pageHeight = window.innerHeight;
    var pageWidth = window.innerWidth;
    var footerHeight = document.getElementById('footer').offsetHeight;
    var headerHeight = document.getElementById('header').offsetHeight;

    var article = document.getElementById('article');
    var sidebar = document.getElementById('side-bar');

    if (pageWidth < 905){
        headerHeight += sidebar.offsetHeight;
        article.style.marginTop = sidebar.offsetHeight;
        article.style.marginLeft = 0;
        article.style.padding = 30;
        if (pageWidth < 581){
            article.style.padding = 10;
        }
    }
    else {
        article.style.marginTop = 0;
        article.style.marginLeft = sidebar.offsetWidth;
        article.style.padding = 50;
    }

    article.style.height = pageHeight - headerHeight - footerHeight;
};