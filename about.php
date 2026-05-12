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
          <a href="assets/cv.pdf" class="ds-download-button" target="_blank">
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