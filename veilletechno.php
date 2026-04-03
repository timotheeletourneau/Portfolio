<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$page_title = 'Veille technologique - Portfolio Timothée Letourneau';
include 'header.php';
?>

<section class="ds-resume-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>À propos de moi</h2>
        <p>
          Bonjour ! Je suis Timothée Letourneau, développeur logiciel basé à Angers, France.
          Passionné par la programmation et le développement web, je travaille sur des projets
          variés allant des applications web aux solutions logicielles.
        </p>
      </div>
      <div class="col-lg-6">
        <figure>
          <img src="assets/images/about-image.png" class="ds-image-shadow" alt="Timothée Letourneau">
          <figcaption>Portrait de Timothée</figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>