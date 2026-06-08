<?php
/* ======================================================================
   PAGE "FORMATION"
   - Affiche ton parcours sous forme de frise chronologique
   - error_reporting activé (à désactiver en production)
   ====================================================================== */

// ⚠️ À DÉSACTIVER EN PRODUCTION :
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$page_title = 'Formation - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- ======================================================================
     BANNIÈRE "FORMATION" (ds-banner)
     - Même structure que les autres pages
     - Pas d'image à droite (commentée dans le code)
     ====================================================================== -->
<section class="ds-banner">
  <div class="container">
    <div class="row align-items-center">
      <!-- Colonne de gauche : Texte -->
      <div class="col-lg-7 ds-banner-left" data-aos="fade-right">
        <h1 class="ds-banner-hed">
          Formation
        </h1>
        <!-- Conteneur pour l'animation -->
        <div style="height: 36px; margin-top: 15px; position: relative; width: fit-content;">
          <div class="typing-animation"></div>
        </div>
        <!-- Texte vide (peut être rempli si besoin) -->
        <div class="ds-about-text">
          <p></p>
        </div>
      </div>
      
      <!-- Optionnel : Ajoute une image à droite si tu veux (comme dans index.php) -->
      <!-- <div class="col-lg-5" data-aos="fade-left">
        <figure>
          <img src="assets/images/formation-image.png" class="ds-image-shadow">
          <figcaption>Mon parcours</figcaption>
        </figure>
      </div> -->
    </div>
  </div>
</section>

<!-- ======================================================================
     FRISE CHRONOLOGIQUE (timeline-container)
     - Affiche ton parcours sous forme de timeline
     - Alternance gauche/droite pour les événements
     - Utilise CSS pour le style (voir main.css)
     ====================================================================== -->
<div class="container">
  <div class="timeline-container">
    
    <!-- Événement 1 : Baccalauréat professionnel ELEEC -->
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2011 - 2013</span>
        <h3>Baccalauréat professionnel ELEEC</h3>
        <i>Électrotechnique, énergie et équipements communicants</i>
        <p>Les Herbiers | Formation initiale avec alternance chez <strong>Enedis</strong></p>
      </div>
    </div>
    
    <!-- Événement 2 : BTS SIO option SISR -->
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2022 - 2024</span>
        <h3>Brevet de technicien supérieur SIO option SISR</h3>
        <i>Solutions d'Infrastructure, Systèmes et Réseaux</i>
        <p>Bellevigne-en-Layon | Formation initiale avec alternance chez <strong>UAPL</strong></p>
        <a href="https://timoportfolio0.wordpress.com/" target="_blank" rel="noopener noreferrer"><i>▶</i> Voir mon ancien portfolio</a>
      </div>
    </div>
    
    <!-- Événement 3 : BTS SIO option SLAM (en cours) -->
    <div class="timeline-event">
      <div class="timeline-content">
        <span class="date">2025 - 2027</span>
        <h3>Brevet de technicien supérieur SIO option SLAM</h3>
        <i>Solutions Logicielles et Applications Métiers</i>
        <p>Lyon | Formation initiale avec alternance chez <strong>CNR</strong></p>
      </div>
    </div>
    
    <!-- Pour ajouter un événement : -->
    <!-- <div class="timeline-event"> -->
    <!--   <div class="timeline-content"> -->
    <!--     <span class="date">ANNÉE - ANNÉE</span> -->
    <!--     <h3>Titre de la formation</h3> -->
    <!--     <i>Sous-titre ou spécialité</i> -->
    <!--     <p>Lieu | Détails</p> -->
    <!--   </div> -->
    <!-- </div> -->
  </div>
</div>

<?php include 'footer.php'; ?>

<!-- Charge le script pour l'animation de texte -->
<script src="assets/js/typing-animation.js"></script>
</body>
</html>