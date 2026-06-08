<?php
/* ======================================================================
   PAGE "CONTACT"
   - Affiche tes coordonnées
   - error_reporting activé (à désactiver en production)
   ====================================================================== */

// ⚠️ À DÉSACTIVER EN PRODUCTION :
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$page_title = 'Contact - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- ======================================================================
     BANNIÈRE "CONTACT" (ds-banner)
     - Même structure que les autres pages
     - Colonne de droite : carte personnalisée au lieu de la photo
     ====================================================================== -->
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
        <!-- Carte personnalisée à la place de la photo -->
        <!-- Utilise Font Awesome (fas fa-comment-dots) pour l'icône -->
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

<?php include 'footer.php'; ?>