<?php
/* ======================================================================
   PAGE "PROJETS"
   - Affiche tes projets sous forme de grille
   - error_reporting activé (à désactiver en production)
   ====================================================================== */

// ⚠️ À DÉSACTIVER EN PRODUCTION :
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$page_title = 'Projets - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- ======================================================================
     BANNIÈRE "PROJETS" (ds-banner)
     - Même structure que les autres pages
     - Colonne de droite : grille des projets au lieu de la photo
     ====================================================================== -->
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
        <!-- Texte pour la page Projets (peut être rempli plus tard) -->
        <div class="ds-about-text">
          <p></p>
        </div>
      </div>

      <!-- Colonne de droite : Grille de miniatures pour les projets -->
      <div class="col-lg-5" data-aos="fade-left">
        <!-- Grille responsive des projets -->
        <!-- Utilise CSS Grid (voir .projects-grid dans main.css) -->
        <div class="projects-grid">
          
          <!-- Exemple avec 4 projets -->
          <!-- Chaque projet est un lien (a) avec une image et un titre -->
          
          <!-- Projet 1 : Python -->
          <a href="https://github.com/timotheeletourneau/python-learning.git" class="project-tile" title="Projet Python">
            <img src="assets/images/python.jpg" alt="Projet Python">
            <div class="project-content">
              <span>Python</span>
            </div>
          </a>
          
          <!-- Projet 2 : À compléter -->
          <a href="#projet2" class="project-tile" title="Projet 2">
            <div class="project-content">
              <span>projet2</span>
            </div>
          </a>
          
          <!-- Projet 3 : À compléter -->
          <a href="#projet3" class="project-tile" title="Projet 3">
            <div class="project-content">
              <span>projet3</span>
            </div>
          </a>
          
          <!-- Projet 4 : À compléter -->
          <a href="#projet4" class="project-tile" title="Projet 4">
            <div class="project-content">
              <span>projet4</span>
            </div>
          </a>
          
          <!-- Pour ajouter un projet : -->
          <!-- <a href="LIEN" class="project-tile" title="NOM"> -->
          <!--   <img src="assets/images/NOM.jpg" alt="Description"> -->
          <!--   <div class="project-content"> -->
          <!--     <span>NOM</span> -->
          <!--   </div> -->
          <!-- </a> -->
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Charge le script pour l'animation de frappe -->
<script src="assets/js/typing-animation.js"></script>
</body>
</html>