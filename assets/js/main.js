jQuery(document).ready(function($) {

    // =============================================
    // SLIDER TÉMOIGNAGES
    // =============================================
    if ($('.ds-testimonials-section').length) {
        $('.ds-testimonials-slider').slick({
            infinite: true,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: "<button type='button' class='slick-prev slick-arrow'><i class='ri-arrow-left-line'></i></button>",
            nextArrow: "<button type='button' class='slick-next slick-arrow'><i class='ri-arrow-right-line'></i></button>"
        });
    }

    // =============================================
    // MENU BURGER — HOVER (petit écran uniquement)
    // =============================================
    const wrapper = document.querySelector('.burger-wrapper');
    const menuNav = document.getElementById('menuNav');

    if (wrapper && menuNav) {
        let hideTimeout;

        wrapper.addEventListener('mouseenter', function() {
            clearTimeout(hideTimeout);
            menuNav.className = 'menu-visible';
        });

        wrapper.addEventListener('mouseleave', function() {
            hideTimeout = setTimeout(function() {
                menuNav.className = 'menu-hidden';
            }, 150);
        });

        document.querySelectorAll('.ds-menu-dropdown a').forEach(function(link) {
            link.addEventListener('click', function() {
                menuNav.className = 'menu-hidden';
            });
        });
    }

});
