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
=======
/* ======================================================================
   SCRIPT PRINCIPAL DU PORTFOLIO
   - Gère le slider des témoignages (si présent)
   - Gère le menu burger pour les écrans mobiles
   - Utilise jQuery pour simplifier la manipulation du DOM
   ====================================================================== */

jQuery(document).ready(function($) {

    /* ======================================================================
       SLIDER DES TÉMOIGNAGES
       - Initialisé uniquement si la section .ds-testimonials-section existe
       - Utilise la bibliothèque Slick Carousel (chargée via CDN)
       - Configuration :
         * infinite: true → Boucle infinie
         * arrows: true → Flèches de navigation visibles
         * autoplay: true → Défilement automatique
         * autoplaySpeed: 4000 → Change toutes les 4 secondes
       ====================================================================== */
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

    /* ======================================================================
       MENU BURGER (pour écrans <= 1150px)
       - Gère l'ouverture/fermeture du menu mobile
       - Écoute les clics sur le bouton burger et les liens
       ====================================================================== */=============================================
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
        /* Ouvre/ferme le menu au clic sur le bouton burger */
        burgerBtn.addEventListener('click', function(e) {
            e.stopPropagation(); // Empêche la propagation de l'événement (évite la fermeture immédiate)

            // Basculer la classe "active" sur le bouton (pour le style CSS)
            burgerBtn.classList.toggle('active');

            // Basculer l'affichage du menu : cache → visible ou visible → caché
            if (menuNav.classList.contains('menu-hidden')) {
                menuNav.classList.remove('menu-hidden');
                menuNav.classList.add('menu-visible');
            } else {
                menuNav.classList.remove('menu-visible');
                menuNav.classList.add('menu-hidden');
            }
        });

        /* Ferme le menu si on clique sur un lien du menu */
        document.querySelectorAll('.ds-menu-dropdown a').forEach(function(link) {
            link.addEventListener('click', function() {
                burgerBtn.classList.remove('active');
                menuNav.classList.remove('menu-visible');
                menuNav.classList.add('menu-hidden');
            });
        });

        /* Ferme le menu si on clique en dehors du menu ou du bouton */
        document.addEventListener('click', function(e) {
            if (!burgerBtn.contains(e.target) && !menuNav.contains(e.target)) {
                burgerBtn.classList.remove('active');
                menuNav.classList.remove('menu-visible');
                menuNav.classList.add('menu-hidden');
            }
        });
    }

});

