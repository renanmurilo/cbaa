$(document).ready(function() {
    // Toggle Menu
    let openMenu = document.querySelector('.open__menu');
    let menu = document.querySelector('.menu')
    let closeMenu = document.querySelector('.close__menu')
    let logo = document.querySelector('.logo__mobile')
    let sociais = document.querySelector('#sociais')

    openMenu.addEventListener('click', function(e)  {
        e.preventDefault();

        closeMenu.classList.toggle('active')
        sociais.classList.toggle('active')
        openMenu.classList.toggle('active')
        menu.classList.toggle('active')
        logo.classList.toggle('active')
    });

    closeMenu.addEventListener('click', function(e) {
        e.preventDefault();

        openMenu.classList.toggle('active')
        closeMenu.classList.toggle('active')
        sociais.classList.toggle('active')
        menu.classList.toggle('active');
        logo.classList.toggle('active')
    });

    let btnDropDown = document.getElementById('menu-item-50');
    let subMenu = document.querySelector('.sub-menu');

    btnDropDown.addEventListener('click', function() {

        subMenu.classList.toggle('active')
        btnDropDown.classList.toggle('active')
    })

    let openProducts = document.getElementById('openProducts');
    let contentModelos = document.querySelector('.content__modelos');

    openProducts.addEventListener('click', function(e)  {
        e.preventDefault()

        contentModelos.classList.toggle('active')
    });
});

$('[data-group]').each(function () {
    var $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        activeClass = 'active';

    $allTarget.first().addClass(activeClass);
    $allClick.first().addClass(activeClass);
    

    $allClick.click(function (e) {
        e.preventDefault();

        $allTarget.removeClass(activeClass);
        $allClick.removeClass(activeClass);

        var id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');

        $target.addClass(activeClass);
        $(this).addClass(activeClass)
    });
});

$('[data-grupo]').each(function () {
    var $allTarget = $(this).find('[data-target]'),
        $allClick = $(this).find('[data-click]'),
        $close =$(this).find('[data-close]'),
        activeClass = 'active';
    
    $allClick.click(function (e) {
        e.preventDefault();

        $allTarget.removeClass(activeClass);
        $allClick.removeClass(activeClass);

        var id = $(this).data('click'),
            $target = $('[data-target="' + id + '"]');

        $target.addClass(activeClass);
        $(this).addClass(activeClass)
    });

    $close.click(function (e) {
        e.preventDefault();
        
        $allTarget.removeClass(activeClass);
        $allClick.removeClass(activeClass);
    })
});

(() => {
    if (!localStorage.pureJavaScriptCookiesCbaa) {
        document.querySelector(".box-cookies").classList.remove('hide');
    }

    const acceptCookies = () => {
        document.querySelector(".box-cookies").classList.add('hide');
        localStorage.setItem("pureJavaScriptCookiesCbaa", "accept");
    };

    const btnCookies = document.querySelector(".btn-cookies");

    btnCookies.addEventListener('click', acceptCookies);
})();
// $(document).ready(function(){
//     $('.row__wrapper__slide .btn__wrapper').click(function(){
//         $('.btn__wrapper').removeClass("active");
//         $(this).addClass("active");
//     });
// });