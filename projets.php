<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title = 'Projets - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- Banner / Hero Section (IDENTIQUE à about.php) -->
<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <!-- Colonne de gauche : Texte -->
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          Mes projets
        </h1>
        <!-- Conteneur pour l'animation (optionnel, comme dans About) -->
        <div style="height: 36px; margin-top: 15px; position: relative; width: fit-content;">
          <div class="typing-animation"></div>
        </div>
        <!-- Texte pour la page Projets (vide pour l'instant) -->
        <div class="ds-about-text">
          <p></p>
        </div>
      </div>

      <!-- Colonne de droite : Grille de miniatures pour les projets -->
      <div class="col-lg-5" data-aos="fade-left">
        <div class="projects-grid">
          <!-- Exemple avec 3 projets -->
          <a href="https://github.com/timotheeletourneau/python-learning.git" class="project-tile" title="Projet 1">
            <img src="assets/images/python.jpg">
            <div class="project-content">
              <span>Python</span>
            </div>
          </a>
          <a href="#projet2" class="project-tile" title="Projet 2">
            <div class="project-content">
              <span>projet2</span>
            </div>
          </a>
          <a href="#projet3" class="project-tile" title="Projet 3">
            <div class="project-content">
              <span>projet3</span>
            </div>
          </a>
          <a href="#projet4" class="project-tile" title="Projet 4">
            <div class="project-content">
              <span>projet4</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section noire en bas (IDENTIQUE à index.php) -->
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
<script src="assets/js/typing-animation.js"></script>
</body>
</html>