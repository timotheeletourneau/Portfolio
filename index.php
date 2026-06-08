<?php
/* ======================================================================
   PAGE D'ACCUEIL
   - Définit le titre de la page
   - Inclut le header et le footer
   ====================================================================== */
$page_title = 'Accueil - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- ======================================================================
     BANNIÈRE PRINCIPALE (ds-banner)
     - Section d'accueil avec présentation
     - Utilise Bootstrap pour le grid (col-lg-7 et col-lg-5)
     - data-aos="fade-right/fade-left" pour les animations au scroll (AOS)
     ====================================================================== -->
<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <!-- Colonne de gauche : Texte -->
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          Développeur logiciel<br>
          Angers, France
        </h1>
        <!-- Conteneur FIXE pour éviter les déplacements de la page -->
        <!-- Hauteur fixe = 36px pour correspondre à l'animation -->
        <div style="
    height: 36px;
    margin-top: 15px;
    position: relative;
    width: fit-content;
">
          <!-- Animation de frappe (effet terminal) -->
          <!-- Géré par typing-animation.js -->
          <div class="typing-animation"></div>
        </div>
      </div>
      
      <!-- Colonne de droite : Photo -->
      <div class="col-lg-5" data-aos="fade-left">
        <figure>
          <!-- Image avec ombre personnalisée (ds-image-shadow) -->
          <img src="assets/images/banner-image.png" class="ds-image-shadow">
          <figcaption>Timothée Letourneau</figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Charge le script pour l'animation de frappe -->
<script src="assets/js/typing-animation.js"></script>
</body>
</html>