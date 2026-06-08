<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title = 'Formation - Portfolio Timothée Letourneau';
include 'header.php';
?>

<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <!-- Colonne de gauche : Texte -->
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          Formation
        </h1>
        <!-- Conteneur pour l'animation -->
        <div style="height: 36px; margin-top: 15px; position: relative; width: fit-content;">
          <div class="typing-animation"></div>
        </div>
        <!-- Texte vide -->
        <div class="ds-about-text">
          <p></p>
        </div>
      </div>
      <!-- Optionnel : Ajoute une image à droite si tu veux (comme dans index.php) -->
      <!-- <div class="col-lg-5" data-aos="fade-left">
        <figure>
          <img src="assets/images/formation-image.png" class="ds-image-shadow">
          <figcaption>Mon parcours</figcaption>
        </figure>
      </div> -->
    </div>
  </div>
</section>

<!-- Frise chronologique centrée -->
<div class="container">
  <div class="timeline-container">
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2011 - 2013</span>
        <h3>Baccalauréat professionnel ELEEC</h3>
        <i>Électrotechnique, énergie et équipements communicants</i>
        <p>Les Herbiers | Formation initiale avec alternance chez <strong>Enedis</strong></p>
      </div>
    </div>
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2022 - 2024</span>
        <h3>Brevet de technicien supérieur SIO option SISR</h3>
        <i>Solutions d'Infrastructure, Systèmes et Réseaux</i>
        <p>Bellevigne-en-Layon | Formation initiale avec alternance chez <strong>UAPL</strong></p>
        <a href="https://timoportfolio0.wordpress.com/" target="_blank"><i>▶</i> Voir mon ancien portfolio</a>
      </div>
    </div>
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2025 - 2027</span>
        <h3>Brevet de technicien supérieur SIO option SLAM</h3>
        <i>Solutions Logicielles et Applications Métiers</i>
        <p>Lyon | Formation initiale avec alternance chez <strong>CNR</strong></p>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
<!-- Charge le script pour l'animation de texte -->
<script src="assets/js/typing-animation.js"></script>
</body>
</html>