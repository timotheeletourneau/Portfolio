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
        <p>Formation scolaire et en alternance chez <strong>Enedis</strong> : électrotechnique, énergie et équipements communicants – Les Herbiers.</p>
      </div>
    </div>
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2022 - 2024</span>
        <h3>Brevet de technicien supérieur SIO option SISR</h3>
        <p>Formation scolaire et en alternance chez <strong>UAPL</strong> : support informatique, administration réseaux et cybersécurité – Angers.</p>
        <a href="https://timoportfolio0.wordpress.com/" target="_blank"><i>▶</i> Voir mon ancien portfolio</a>
      </div>
    </div>
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2025 - 2027</span>
        <h3>Brevet de technicien supérieur option SLAM</h3>
        <p>Formation scolaire et en alternance chez <strong>CNR</strong> : conception et développement d'applications, gestion de bases de données et cybersécurité – Lyon.</p>
      </div>
    </div>
  </div>
</div>

<!-- Section Stack technique -->
<section class="ds-resume-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="portfolio-title">Stack technique</h2>
        <div class="competences-list">
          <!-- Python -->
          <div class="competence-item">
            <i class="fab fa-python"></i>
            <span>Python</span>
          </div>
          <!-- HTML5 -->
          <div class="competence-item">
            <i class="fab fa-html5"></i>
            <span>HTML5</span>
          </div>
          <!-- CSS3 -->
          <div class="competence-item">
            <i class="fab fa-css3-alt"></i>
            <span>CSS3</span>
          </div>
          <!-- JavaScript -->
          <div class="competence-item">
            <i class="fab fa-js-square"></i>
            <span>JavaScript</span>
          </div>
          <!-- PHP -->
          <div class="competence-item">
            <i class="fab fa-php"></i>
            <span>PHP</span>
          </div>
          <!-- Git -->
          <div class="competence-item">
            <i class="fab fa-git-alt"></i>
            <span>Git</span>
          </div>
          <!-- MySQL -->
          <div class="competence-item">
            <i class="fas fa-database"></i>
            <span>MySQL</span>
          </div>
          <!-- C# -->
          <div class="competence-item">
            <i class="fab fa-microsoft"></i>
            <span>C#</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<!-- Charge le script pour l'animation de texte -->
<script src="assets/js/typing-animation.js"></script>
</body>
</html>