// Javacsript Puro
window.addEventListener('scroll', () => {
    const show = document.querySelector('#show');
    const showDiv = document.querySelector('#show div');
    const buttonTop = document.querySelector('#buttonTop');

    if (document.documentElement.scrollWidth >= 765) {
        if (document.documentElement.scrollTop > (show.offsetHeight + 15)) {
            showDiv.classList.add('d-none');
            show.style.transition = 'all 0.3s';
            show.classList.remove('pt-3');
        } else {
            showDiv.classList.remove('d-none');
            show.classList.add('pt-3');
        }
    }

    if (document.documentElement.scrollTop > 150) {
        buttonTop.classList.remove('buttonTop-hidden');
        buttonTop.classList.add('buttonTop-visible');
    } else {
        buttonTop.classList.remove('buttonTop-visible');
        buttonTop.classList.add('buttonTop-hidden');
    }
});

// Codigo JQuery
var $doc = $('html, body');
$('.click-scroll').click(function () {
    $doc.animate({
        scrollTop: $($.attr(this, 'href')).offset().top - ($('#navmenu').height() + 15)
    }, 450);
    return false;
});
