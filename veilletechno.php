<?php
$page_title = 'Veille Technologique - Portfolio Timothée Letourneau';
include 'header.php';
?>
<!-- Styles spécifiques à cette page -->
<body class="page-veille-tech">
<section class="tech-watch-section">
  <div class="window-grid">
    <!-- Grande fenêtre (gauche) -->
    <div class="window large">
      <img src="chemin/vers/grande-image.jpg" alt="Veille principale">
      <div class="window-content">
        <h3>Titre de la grande fenêtre</h3>
        <p>Description en jaune.</p>
      </div>
    </div>

    <!-- 2 petites fenêtres (droite) -->
    <div class="window-stack">
      <div class="window">
        <img src="chemin/vers/petite-image-1.jpg" alt="Veille 1">
        <div class="window-content">
          <h3>Titre 1</h3>
          <p>Description 1.</p>
        </div>
      </div>
      <div class="window">
        <img src="chemin/vers/petite-image-2.jpg" alt="Veille 2">
        <div class="window-content">
          <h3>Titre 2</h3>
          <p>Description 2.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- 3 fenêtres en dessous -->
  <div class="window-bottom-row">
    <div class="window">
      <img src="chemin/vers/image-bas-1.jpg" alt="Veille bas 1">
      <div class="window-content">
        <h3>Titre bas 1</h3>
        <p>Description bas 1.</p>
      </div>
    </div>
    <div class="window">
      <img src="chemin/vers/image-bas-2.jpg" alt="Veille bas 2">
      <div class="window-content">
        <h3>Titre bas 2</h3>
        <p>Description bas 2.</p>
      </div>
    </div>
    <div class="window">
      <img src="chemin/vers/image-bas-3.jpg" alt="Veille bas 3">
      <div class="window-content">
        <h3>Titre bas 3</h3>
        <p>Description bas 3.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section Stack technique (comme dans index.php) -->
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