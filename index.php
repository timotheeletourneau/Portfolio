<?php
$page_title = 'Accueil - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- Banner / Hero Section -->
<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          Développeur logiciel<br>
          Angers, France
        </h1>
        <!-- Conteneur FIXE pour éviter les déplacements -->
        <div style="
    height: 36px;
    margin-top: 15px;
    position: relative;
    width: fit-content;
">
    <div class="typing-animation"></div>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-left">
        <figure>
          <img src="assets/images/banner-image.png" class="ds-image-shadow">
          <figcaption>Timothée Letourneau</figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- Resume / About Preview -->
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