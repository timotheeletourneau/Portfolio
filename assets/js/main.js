// ======================================================================
// SCRIPT PRINCIPAL DU PORTFOLIO
// - Gère le slider des témoignages (si présent)
// - Gère le menu burger pour les écrans mobiles
// - Utilise jQuery pour simplifier la manipulation du DOM
// ======================================================================

jQuery(document).ready(function($) {
    // =============================================
    // SLIDER DES TÉMOIGNAGES
    // Initialisé uniquement si la section .ds-testimonials-section existe
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
    // MENU BURGER (pour écrans <= 1150px)
    // Gère l'ouverture/fermeture du menu mobile
    // =============================================
    const $burgerBtn = $('#burgerBtn');
    const $menuNav = $('#menuNav');

    if ($burgerBtn.length && $menuNav.length) {
        // Ouvre/ferme le menu au clic sur le bouton burger
        $burgerBtn.on('click touchstart', function(e) {
            e.stopPropagation();
            $(this).toggleClass('active');
            $menuNav.toggleClass('menu-hidden menu-visible');
        });

        // Ferme le menu si on clique sur un lien
        $('.ds-menu-dropdown a').on('click touchstart', function() {
            $burgerBtn.removeClass('active');
            $menuNav.addClass('menu-hidden').removeClass('menu-visible');
        });

        // Ferme le menu si on clique en dehors
        $(document).on('click touchstart', function(e) {
            if (!$burgerBtn.is(e.target) && $burgerBtn.has(e.target).length === 0 &&
                !$menuNav.is(e.target) && $menuNav.has(e.target).length === 0) {
                $burgerBtn.removeClass('active');
                $menuNav.addClass('menu-hidden').removeClass('menu-visible');
            }
        });
    }

    // =============================================
    // INITIALISATION D'AOS (si utilisé)
    // =============================================
    AOS.init();
});