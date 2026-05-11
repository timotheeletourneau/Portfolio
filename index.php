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
<section class="ds-resume-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Portfolio</h2>
        <p><a href="/projets" class="cta-link">→ Voir les projets ←</a></p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="assets/js/typing-animation.js"></script>
</body>
</html>