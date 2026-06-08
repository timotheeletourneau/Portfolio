<?php
/* ======================================================================
   PAGE "VEILLE TECHNOLOGIQUE"
   - Affiche des articles sous forme de "fenêtres" cliquables
   - Design inspiré des interfaces d'OS (Windows, macOS)
   ====================================================================== */
$page_title = 'Veille Technologique - Portfolio Timothée Letourneau';
include 'header.php';
?>

<!-- ======================================================================
     STYLE SPÉCIFIQUE À CETTE PAGE
     - La classe "page-veille-tech" permet d'appliquer des styles spécifiques
     ====================================================================== -->
<body class="page-veille-tech">

<!-- ======================================================================
     SECTION VEILLE TECHNOLOGIQUE (tech-watch-section)
     - Conteneur principal des "fenêtres"
     - Utilise une grille CSS (window-grid) pour la disposition
     ====================================================================== -->
<section class="tech-watch-section">
  <div class="window-grid">
    
    <!-- ======================================================================
         GRANDE FENÊTRE (gauche)
         - Occupe 2/3 de la largeur sur desktop
         - Cliquable pour ouvrir l'article dans un nouvel onglet
         ====================================================================== -->
    <div class="window large" onclick="window.open('https://linc.cnil.fr/article-12-des-modeles-de-langage-aux-modeles-de-monde', '_blank')">
      <img src="assets/images/world-models.png" alt="Modèles de langage et modèles de monde">
      <div class="window-content">
        <h3>Des modèles de langage aux modèles de monde</h3>
        <p style="color: #CBFE00;">Comment l'IA passe de la génération de texte à la compréhension du monde réel, avec les enjeux éthiques et juridiques.</p>
      </div>
    </div>

    <!-- ======================================================================
         2 PETITES FENÊTRES (droite, empilées verticalement)
         - Chaque fenêtre est cliquable
         - Utilise window-stack pour l'empilement
         ====================================================================== -->
    <div class="window-stack">
      
      <!-- Fenêtre 1 : Mistral AI -->
      <div class="window" onclick="window.open('https://www.usine-digitale.fr/editorial/mistral-ai-va-ouvrir-son-premier-data-center-en-france.N2227191', '_blank')">
        <img src="assets/images/fondateurs-mistral.png" alt="Fondateurs de Mistral AI">
        <div class="window-content">
          <h3>Mistral AI ouvre son 1er datacenter en France</h3>
          <p style="color: #CBFE00;">La souveraineté numérique française face aux GAFAM.</p>
        </div>
      </div>
      
      <!-- Fenêtre 2 : G7 et IA -->
      <div class="window" onclick="window.open('https://www.usine-digitale.fr/intelligence-artificielle/open-source-pme-energie-le-g7-dessine-une-feuille-de-route-pour-diffuser-lia-dans-leconomie-tout-en-maitrisant-ses-risques.I5UK5N3YPJBDTACPMC42FSEXVI.html', '_blank')">
        <img src="assets/images/g7-ia-feuille-route.png" alt="G7 et feuille de route IA">
        <div class="window-content">
          <h3>Le G7 dessine une feuille de route pour l'IA</h3>
          <p style="color: #CBFE00;">Diffuser l'IA dans l'économie tout en maîtrisant ses risques.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Charge le script pour l'animation de texte -->
<script src="assets/js/typing-animation.js"></script>
</body>
</html>
