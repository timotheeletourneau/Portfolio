<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title = 'Contact - Portfolio Timothée Letourneau';
include 'header.php';
?>

<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          Me contacter<br>
        </h1>
        <!-- Conteneur FIXE pour éviter les déplacements -->
        <div style="height: 36px; margin-top: 15px; position: relative; width: fit-content;">
          <div class="typing-animation"></div>
        </div>
      </div>
      <div class="col-lg-5" data-aos="fade-left">
        <!-- Custom card à la place de la photo -->
        <div class="custom-card">
          <div class="card-icon">
            <i class="fas fa-comment-dots"></i>
          </div>
          <div class="card-content">
            <h3>Contact</h3>
            <p>Email : tletourneau78@gmail.com</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Resume / About Preview -->
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