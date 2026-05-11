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
// MENU BURGER (petit écran uniquement)
// =============================================
const burgerBtn = document.getElementById('burgerBtn');
const menuNav = document.getElementById('menuNav');

if (burgerBtn && menuNav) {
    // Ouvre/ferme le menu au clic sur le bouton
    burgerBtn.addEventListener('click', function(e) {
        e.stopPropagation(); // Empêche la propagation de l'événement

        // Basculer la classe "active" sur le bouton
        burgerBtn.classList.toggle('active');

        // Basculer l'affichage du menu
        if (menuNav.classList.contains('menu-hidden')) {
            menuNav.classList.remove('menu-hidden');
            menuNav.classList.add('menu-visible');
        } else {
            menuNav.classList.remove('menu-visible');
            menuNav.classList.add('menu-hidden');
        }
    });

    // Ferme le menu si on clique sur un lien
    document.querySelectorAll('.ds-menu-dropdown a').forEach(function(link) {
        link.addEventListener('click', function() {
            burgerBtn.classList.remove('active');
            menuNav.classList.remove('menu-visible');
            menuNav.classList.add('menu-hidden');
        });
    });

    // Ferme le menu si on clique ailleurs sur la page
    document.addEventListener('click', function(e) {
        if (!burgerBtn.contains(e.target) && !menuNav.contains(e.target)) {
            burgerBtn.classList.remove('active');
            menuNav.classList.remove('menu-visible');
            menuNav.classList.add('menu-hidden');
        }
    });
}

});

