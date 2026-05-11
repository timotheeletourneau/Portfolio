<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Titre de la page
$page_title = 'À propos - Portfolio Timothée Letourneau';
$header_class = 'ds-header--about'; // Header plus compact pour la page about
include 'header.php';
?>

<section class="ds-banner ds-about-section">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-md-6 ds-about-text">
        <h1>À propos de moi</h1>
        <p>
          Étudiant en BTS SIO (option SLAM) à l’ESPL Angers, je me consacre au développement d'applications et à la qualité logicielle.
          Ce portfolio rassemble mes projets et illustre ma progression technique ainsi que mes compétences acquises, notamment lors de mon alternance à la CNR.
        </p>
        <a href="assets/cv.pdf" class="ds-download-button" target="_blank">
          Télécharger CV <i class="ri-download-line"></i>
        </a>
      </div>

      <div class="col-md-6 text-center ds-about-image-wrapper">
        <img src="assets/images/code-about.jpg" alt="Moi" class="ds-about-image">
      </div>

    </div>
  </div>
</section>

<section class="ds-resume-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Mon parcours & compétences</h2>
        <p>
          Retrouvez le détail de mes expériences professionnelles et les technologies que je maîtrise.
        </p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>