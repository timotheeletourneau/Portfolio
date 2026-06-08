<?php
$page_title = 'À propos - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- Banner / Hero Section (IDENTIQUE à index.php) -->
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
          <a href="assets/cv-ajour.pdf" class="ds-download-button" target="_blank">
            Télécharger mon CV <i class="ri-download-line"></i>
          </a>
        </div>
      </div>

      <!-- Colonne de droite : Photo (IDENTIQUE à index.php) -->
      <div class="col-lg-5" data-aos="fade-left">
        <figure class="about-figure"> <!-- ✅ Ajoute cette classe -->
        <img src="assets/images/code-about.jpg" class="ds-image-shadow ds-about-image" alt="Timothée Letourneau">
        </figure>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="assets/js/typing-animation.js"></script>
</body>
</html>