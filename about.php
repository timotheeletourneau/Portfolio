<?php
/* ======================================================================
   PAGE "À PROPOS"
   - Présente ton parcours et tes compétences
   - Structure identique à index.php pour la bannière
   ====================================================================== */
$page_title = 'À propos - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- ======================================================================
     BANNIÈRE "À PROPOS" (ds-banner)
     - Même structure que la page d'accueil
     - Contient : titre + animation + texte de présentation + photo
     ====================================================================== -->
<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <!-- Colonne de gauche : Texte -->
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          À propos de moi
        </h1>
        <!-- Conteneur pour l'animation (identique à l'Index) -->
        <div style="height: 36px; margin-top: 15px; position: relative; width: fit-content;">
          <div class="typing-animation"></div>
        </div>
        
        <!-- Texte supplémentaire pour l'About -->
        <div class="ds-about-text">
          <p>
            Étudiant en BTS SIO (option SLAM) à l’ESPL Angers, je me consacre au développement d'applications et à la qualité logicielle.
            Ce portfolio rassemble mes projets et illustre ma progression technique ainsi que mes compétences acquises lors de mon alternance à la CNR.
          </p>
          <!-- Bouton pour télécharger le CV -->
          <!-- Utilise Remixicon (ri-download-line) pour l'icône -->
          <a href="assets/cv-ajour.pdf" class="ds-download-button" target="_blank" rel="noopener noreferrer">
            Télécharger mon CV <i class="ri-download-line"></i>
          </a>
        </div>
      </div>

      <!-- Colonne de droite : Photo -->
      <div class="col-lg-5" data-aos="fade-left">
        <figure class="about-figure">
          <!-- Image avec ombre personnalisée (ds-image-shadow) et style spécifique (ds-about-image) -->
          <img src="assets/images/code-about.jpg" class="ds-image-shadow ds-about-image" alt="Timothée Letourneau">
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