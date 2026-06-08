<?php
$page_title = 'Veille Technologique - Portfolio Timothée Letourneau';
include 'header.php';
?>
<!-- Styles spécifiques à cette page -->
<body class="page-veille-tech">
<section class="tech-watch-section">
  <div class="window-grid">
   <!-- Grande fenêtre (gauche) -->
  <div class="window large" onclick="window.open('https://linc.cnil.fr/article-12-des-modeles-de-langage-aux-modeles-de-monde', '_blank')">
    <img src="assets/images/world-models.png">
      <div class="window-content">
      <h3>Des modèles de langage aux modèles de monde</h3>
      <p style="color: #FFD700;">Comment l'IA passe de la génération de texte à la compréhension du monde réel, avec les enjeux éthiques et juridiques.</p>
  </div>
</div>

    <!-- 2 petites fenêtres (droite) -->
    <div class="window-stack">
      <div class="window" onclick="window.open('https://www.usine-digitale.fr/editorial/mistral-ai-va-ouvrir-son-premier-data-center-en-france.N2227191', '_blank')">
        <img src="assets/images/fondateurs-mistral.png">
        <div class="window-content">
          <h3>Mistral AI ouvre son 1er datacenter en France</h3>
      <p style="color: #CBFE00;">La souveraineté numérique française face aux GAFAM.</p>
        </div>
      </div>
     <div class="window" onclick="window.open('https://www.usine-digitale.fr/intelligence-artificielle/open-source-pme-energie-le-g7-dessine-une-feuille-de-route-pour-diffuser-lia-dans-leconomie-tout-en-maitrisant-ses-risques.I5UK5N3YPJBDTACPMC42FSEXVI.html', '_blank')">
      <img src="assets/images/g7-ia-feuille-route.png">
      <div class="window-content">
      <h3>Le G7 dessine une feuille de route pour l'IA</h3>
      <p style="color: #CBFE00;">Diffuser l'IA dans l'économie tout en maîtrisant ses risques.</p>
      </div>
    </div>
  </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="assets/js/typing-animation.js"></script>
</body>
</html>