<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page_title; ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

  <!-- Remixicon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Slick Carousel -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

  <!-- Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- Bandeau de navigation -->
  <div class="ds-topbar">
    <div class="ds-topbar-inner">

      <!-- Icônes réseaux sociaux à gauche -->
      <ul class="ds-social">
        <li><a href="https://github.com/" target="_blank"><i class="ri-github-fill"></i></a></li>
        <li><a href="https://stackoverflow.com/" target="_blank"><i class="ri-stack-overflow-line"></i></a></li>
        <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
      </ul>

      <!-- Menu grand écran (liens en bandeau) -->
      <nav class="ds-menu-desktop">
        <a href="index.php">Accueil</a>
        <a href="about.php">À propos</a>
        <a href="projets.php">Projets</a>
        <a href="formation.php">Formation</a>
        <a href="veilletechno.php">Veille technologique</a>
        <a href="contact.php">Contact</a>
      </nav>

      <!-- Burger petit écran -->
      <nav class="ds-menu-mobile">
        <div class="burger-wrapper">
          <button class="burger-btn" id="burgerBtn">
            <span class="burger-icon"></span>
          </button>
          <div id="menuNav" class="menu-hidden">
            <div class="ds-menu-dropdown">
              <a href="index.php">Accueil</a>
              <a href="about.php">À propos</a>
              <a href="projets.php">Projets</a>
              <a href="formation.php">Formation</a>
              <a href="veilletechno.php">Veille technologique</a>
              <a href="contact.php">Contact</a>
            </div>
          </div>
        </div>
      </nav>

    </div>
  </div>

  <!-- Header (icônes sociales + espace) -->
  <header class="ds-header <?php echo isset($header_class) ? $header_class : ''; ?>">
    <div class="container">
    </div>
  </header>