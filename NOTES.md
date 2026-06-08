# 📝 NOTES DE MAINTENANCE - Portfolio Timothée Letourneau

> **Dernière mise à jour** : 2025
> **Auteur** : Vibe Code (pour Timothée Letourneau)
> **Objectif** : Documenter le code pour une reprise rapide et facile.

---

## 📌 **SOMMAIRE**
1. [🎨 DÉPENDANCES ET RESSOURCES EXTERNES](#-dépendances-et-ressources-externes)
2. [🔤 LEXIQUE DES CLASSES CSS (ds-*)](#-lexique-des-classes-css-ds-)
3. [✅ NORMES ET BONNES PRATIQUES VÉRIFIÉES](#-normes-et-bonnes-pratiques-vérifiées)
4. [💡 POINTS FORTS DU CODE](#-points-forts-du-code)
5. [⚠️ POINTS À AMÉLIORER (OPTIONNELS)](#-points-à-améliorer-optionnels)
6. [📁 STRUCTURE DES FICHIERS](#-structure-des-fichiers)
7. [🎯 FONCTIONNALITÉS CLÉS](#-fonctionnalités-clés)

---

## 🎨 **DÉPENDANCES ET RESSOURCES EXTERNES**

### **CDN (Chargés dans `header.php`)**
| **Ressource**          | **Version** | **URL** | **Rôle** | **Utilisation dans le code** |
|------------------------|-------------|---------|----------|-----------------------------|
| **Bootstrap CSS**      | 5.0.2       | [cdn.jsdelivr.net](https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css) | Framework CSS/JS pour le design responsive | Classes comme `container`, `row`, `col-lg-7`, `data-bs-*` |
| **Bootstrap JS**       | 5.0.2       | [cdn.jsdelivr.net](https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js) | Fonctionnalités JS (dropdowns, modals, etc.) | Nécessaire pour les composants interactifs |
| **jQuery**            | 3.5.1       | [ajax.googleapis.com](https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js) | Bibliothèque JS pour manipuler le DOM | Utilisé par Slick Carousel et autres scripts |
| **Remixicon**          | 2.5.0       | [cdn.jsdelivr.net](https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css) | Icônes modernes | Classes comme `ri-github-fill`, `ri-linkedin-fill` |
| **AOS (Animate On Scroll)** | 2.3.1 | [unpkg.com](https://unpkg.com/aos@2.3.1/dist/aos.css) | Animations au défilement | Attributs `data-aos="fade-right"` |
| **Slick Carousel CSS** | 1.8.1 | [cdn.jsdelivr.net](https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css) | Style du slider | Utilisé dans `ds-testimonials-slider` |
| **Slick Carousel JS**  | 1.8.1 | [cdn.jsdelivr.net](https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js) | Fonctionnement du slider | Configuré dans `main.js` |
| **Font Awesome**       | 6.4.0       | [cdnjs.cloudflare.com](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css) | Icônes supplémentaires | Classes comme `fa-python`, `fa-html5`, `fa-git-alt` |
| **Google Fonts**      | -           | [fonts.googleapis.com](https://fonts.googleapis.com) | Polices personnalisées | `Poppins` (texte), `DM Serif Display` (titres) |

### **Ressources locales (dans `/assets/`)**
| **Fichier** | **Type** | **Rôle** |
|-------------|----------|----------|
| `assets/css/main.css` | CSS | Styles personnalisés du portfolio |
| `assets/js/main.js` | JavaScript | Logique du menu burger et du slider témoignages |
| `assets/js/typing-animation.js` | JavaScript | Animation de frappe (effet terminal) |
| `assets/images/` | Dossier | Images du portfolio (photo, projets, etc.) |
| `assets/cv-ajour.pdf` | PDF | CV téléchargeable |

---

## 🔤 **LEXIQUE DES CLASSES CSS (ds-*)**

> **Note** : Le préfixe `ds-` signifie **Design System**. C'est une convention pour éviter les conflits avec Bootstrap.
> **Alternative possible** : Tu peux renommer `ds-` en `port-` (pour Portfolio) si tu préfères.

### **📌 Structure de la page**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s) où c'est utilisé** |
|------------|----------------|----------|----------------------------------|
| `ds-topbar` | Barre du haut | Bandeau noir en haut avec menu et icônes réseaux sociaux | `header.php` |
| `ds-topbar-inner` | Conteneur interne de la barre | Aligne les éléments horizontalement | `header.php` |
| `ds-header` | En-tête | Zone sous la bannière (peut contenir des infos) | `header.php`, `about.php` |
| `ds-header-about` | En-tête de la page "À propos" | Style spécifique pour la page About | `header.php` |
| `ds-banner` | Bannière / Hero | Section d'accueil avec ton nom et ta photo | `index.php`, `about.php`, `projets.php`, etc. |
| `ds-banner-hed` | Titre de la bannière | Titre principal (ex: "Développeur logiciel") | `index.php`, `about.php`, etc. |
| `ds-banner-left` | Colonne de gauche de la bannière | Contient le texte et l'animation | `index.php`, `about.php`, etc. |
| `ds-footer` | Pied de page | Copyright et liens en bas | `footer.php` |

### **📌 Menu et navigation**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `ds-social` | Réseaux sociaux | Liste des icônes (GitHub, LinkedIn, etc.) | `header.php` |
| `ds-menu-desktop` | Menu bureau | Menu horizontal pour grand écran (> 1150px) | `header.php` |
| `ds-menu-mobile` | Menu mobile | Menu burger (☰) pour petit écran | `header.php` |
| `ds-menu-dropdown` | Menu déroulant | Menu qui apparaît au clic sur le burger | `header.php` |
| `burger-btn` | Bouton burger | Bouton du menu mobile | `header.php` |
| `burger-icon` | Icône du burger | Les 3 traits du menu burger | `header.php` |
| `burger-wrapper` | Conteneur du burger | Positionne le bouton burger | `header.php` |
| `menu-hidden` | Menu caché | État initial du menu mobile | `header.php` |
| `menu-visible` | Menu visible | État quand le menu est ouvert | `header.php` |

### **📌 Sections principales**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `ds-about-section` | Section "À propos" | Conteneur pour la page "À propos" | `footer.php`, `about.php` |
| `ds-about-text` | Texte "À propos" | Contient la description et le bouton CV | `about.php` |
| `ds-about-image` | Image "À propos" | Style de l'image de profil | `about.php` |
| `ds-about-image-wrapper` | Conteneur de l'image | Centre et style l'image | `about.php` |
| `ds-resume-section` | Section CV/Compétences | Barre noire en bas avec tes compétences | `footer.php` |
| `ds-projects-section` | Section "Projets" | Conteneur pour la page Projets | `projets.php` |
| `ds-projects-listing-section` | Liste des projets | Zone où les projets sont affichés | `projets.php` |
| `ds-projects-loop` | Boucle des projets | Conteneur pour chaque projet | `projets.php` |
| `ds-testimonials-section` | Section "Témoignages" | Conteneur pour les avis/retours | `footer.php` (si utilisé) |
| `ds-testimonials-slider` | Slider témoignages | Carousel des témoignages | `footer.php` |
| `ds-email-section` | Section "Contact" | Conteneur pour la page Contact | `contact.php` |
| `tech-watch-section` | Section "Veille technologique" | Conteneur pour la page Veille | `veilletechno.php` |

### **📌 Éléments de la veille technologique**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `window-grid` | Grille des fenêtres | Disposition des cartes "fenêtres" | `veilletechno.php` |
| `window` | Fenêtre | Carte individuelle (style fenêtre OS) | `veilletechno.php` |
| `window.large` | Grande fenêtre | Fenêtre principale (gauche) | `veilletechno.php` |
| `window-stack` | Pile de fenêtres | Conteneur pour les petites fenêtres (droite) | `veilletechno.php` |
| `window-content` | Contenu de la fenêtre | Texte à l'intérieur des fenêtres | `veilletechno.php` |
| `window-bottom-row` | Ligne du bas | Dernière ligne de fenêtres | `veilletechno.php` |

### **📌 Frise chronologique (Formation)**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `timeline-container` | Conteneur de la frise | Conteneur principal de la timeline | `formation.php` |
| `timeline-event` | Événement de la frise | Chaque étape (ex: BTS SIO) | `formation.php` |
| `timeline-content` | Contenu de l'événement | Texte et détails de l'étape | `formation.php` |
| `timeline-event:nth-child(even)` | Événement pair | Alignement alterné (droite) | `formation.php` |
| `timeline-event:nth-child(odd)` | Événement impair | Alignement alterné (gauche) | `formation.php` |

### **📌 Grille des projets**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `projects-grid` | Grille des projets | Disposition en grille des miniatures | `projets.php` |
| `project-tile` | Tuile de projet | Carte cliquable pour un projet | `projets.php` |
| `project-content` | Contenu du projet | Texte superposé sur l'image | `projets.php` |
| `project-tile img` | Image du projet | Image de la tuile | `projets.php` |
| `project-tile span` | Titre du projet | Nom du projet | `projets.php` |
| `ds-link-button` | Bouton de lien | Bouton pour accéder au projet | `projets.php` |

### **📌 Compétences (Stack technique)**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `competences-list` | Liste des compétences | Conteneur flex des icônes de compétences | `footer.php` |
| `competence-item` | Élément de compétence | Une compétence (ex: Python, HTML5) | `footer.php` |
| `competence-item i` | Icône de compétence | Icône (ex: `fab fa-python`) | `footer.php` |
| `portfolio-title` | Titre du portfolio | Titre "Stack technique" | `footer.php` |

### **📌 Animations et effets**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `typing-animation` | Animation de frappe | Effet terminal (texte qui s'écrit) | `index.php`, `about.php`, etc. |
| `cursor` | Curseur | Barre clignotante de l'animation | `typing-animation.js` |
| `ds-image-shadow` | Ombre sur l'image | Effet d'ombre pour les photos | `index.php`, `about.php` |

### **📌 Boutons et éléments interactifs**
| **Classe** | **Traduction** | **Rôle** | **Fichier(s)** |
|------------|----------------|----------|----------------|
| `ds-download-button` | Bouton de téléchargement | Bouton pour télécharger le CV | `about.php` |
| `custom-card` | Carte personnalisée | Style des cartes (ex: Contact) | `contact.php` |
| `card-icon` | Icône de la carte | Icône dans la carte | `contact.php` |
| `card-content` | Contenu de la carte | Texte dans la carte | `contact.php` |

---

## ✅ **NORMES ET BONNES PRATIQUES VÉRIFIÉES**

### **📜 Normes PHP (PSR-12)**
| **Critère** | **Statut** | **Explication** |
|------------|------------|----------------|
| Balises PHP `<?php ?>` | ✅ | Présentes dans tous les fichiers PHP |
| Pas de code PHP en dehors des balises | ✅ | Respecté |
| Inclusions de fichiers (`include`) | ✅ | `header.php` et `footer.php` bien inclus |
| Variables bien nommées | ✅ | `$page_title`, `$header_class` |
| Pas de `?>` dans les fichiers inclus | ⚠️ | **À améliorer** : `header.php` et `footer.php` n'ont pas de balise fermante (bon pour éviter les espaces, mais non conforme PSR-12) |

### **📜 Normes HTML (W3C)**
| **Critère** | **Statut** | **Explication** |
|------------|------------|----------------|
| Doctype HTML5 | ✅ | `<!doctype html>` présent |
| Balises sémantiques | ✅ | `<header>`, `<footer>`, `<section>`, `<figure>`, `<figcaption>` |
| Attributs `alt` sur les images | ✅ | Présents sur toutes les images |
| Langue définie | ✅ | `<html lang="fr">` |
| Meta viewport | ✅ | `<meta name="viewport" content="width=device-width, initial-scale=1">` |
| Encodage UTF-8 | ✅ | `<meta charset="utf-8">` |
| Hiérarchie des titres | ✅ | `h1` > `h2` > `h3` bien respectée |

### **📜 Normes CSS (W3C)**
| **Critère** | **Statut** | **Explication** |
|------------|------------|----------------|
| Syntaxe valide | ✅ | Pas d'erreurs de syntaxe |
| Utilisation de `rem` | ✅ | Unités relatives pour l'accessibilité |
| Variables CSS (`:root`) | ✅ | Bonnes pratiques modernes |
| Media queries | ✅ | Adapté pour mobile, tablette, desktop |
| Préfixes vendeurs | ✅ | Pas nécessaire (Bootstrap 5 gère ça) |
| Encodage UTF-8 | ✅ | **Corrigé** (anciennement UTF-16LE) |

### **📜 Normes JavaScript**
| **Critère** | **Statut** | **Explication** |
|------------|------------|----------------|
| Code dans `DOMContentLoaded` | ✅ | Attend que le DOM soit chargé |
| Vérification des éléments avant manipulation | ✅ | `if ($('.ds-testimonials-section').length)` |
| Écouteurs d'événements | ✅ | Bien gérés (ex: `burgerBtn.addEventListener`) |
| Pas de `console.log` en production | ✅ | Aucun trouvé |

### **📜 Accessibilité (WCAG)**
| **Critère** | **Statut** | **Explication** |
|------------|------------|----------------|
| Contraste des couleurs | ✅ | Texte blanc sur fond sombre (bon contraste) |
| Balises sémantiques | ✅ | Améliore la navigation pour les lecteurs d'écran |
| Attributs `alt` | ✅ | Tous les images ont un texte alternatif |
| Focus visible | ⚠️ | **À améliorer** : Ajouter `outline: 2px solid #CBFE00` pour les éléments focusables |
| Texte lisible | ✅ | Taille de police suffisante (14px minimum) |

### **📜 Sécurité**
| **Critère** | **Statut** | **Explication** |
|------------|------------|----------------|
| `error_reporting` | ⚠️ | **À améliorer** : Désactiver en production (`contact.php`, `projets.php`) |
| `target="_blank"` | ⚠️ | **À améliorer** : Ajouter `rel="noopener noreferrer"` pour éviter le tabnabbing |
| Pas de données sensibles exposées | ✅ | Aucun mot de passe ou clé API dans le code |

---

## 💡 **POINTS FORTS DU CODE**

### **🎯 Architecture et Organisation**
1. **Séparation des fichiers** :
   - `header.php` et `footer.php` inclus dans chaque page → **Évite la duplication de code**.
   - Dossiers `assets/css/` et `assets/js/` bien organisés.

2. **Modularité** :
   - Chaque page PHP (`index.php`, `about.php`, etc.) est autonome mais réutilise les composants communs.
   - Les styles CSS sont regroupés dans `main.css` avec des classes sémantiques.

3. **Responsive Design** :
   - **Media queries complètes** pour toutes les tailles d'écran (mobile, tablette, desktop, grand écran).
   - Utilisation intelligente de **Bootstrap 5** pour le grid system.

4. **Animations fluides** :
   - **AOS** pour les animations au scroll (`data-aos="fade-right"`).
   - **Animation de frappe** (typing) en JavaScript pur → **Léger et performant**.

5. **Design cohérent** :
   - Palette de couleurs limitée et harmonieuse (#2A2A2A, #CBFE00, #FFF).
   - Polices bien choisies (Poppins pour le texte, DM Serif Display pour les titres).

### **🚀 Performances**
1. **CDN pour les dépendances** :
   - Bootstrap, jQuery, Font Awesome, etc. chargés depuis des CDN → **Réduit la charge du serveur**.

2. **Images optimisées** :
   - Les images semblent être de taille raisonnable (à vérifier avec des outils comme TinyPNG).

3. **Code JavaScript léger** :
   - `typing-animation.js` est minimaliste et efficace.
   - `main.js` est bien structuré et commenté.

### **🔧 Maintenabilité**
1. **Nommage des classes** :
   - Préfixe `ds-` évite les conflits avec Bootstrap.
   - Classes sémantiques (ex: `timeline-event`, `project-tile`).

2. **Commentaires existants** :
   - Certains fichiers ont déjà des commentaires (ex: `// MENU BURGER` dans `main.js`).

3. **Structure claire** :
   - Chaque section du portfolio a son propre fichier PHP.
   - Le CSS est organisé par sections (bannière, menu, projets, etc.).

---

## ⚠️ **POINTS À AMÉLIORER (OPTIONNELS)**

> **⚠️ Ces points ne sont PAS bloquants** et n'affectent pas le fonctionnement du site.
> Ils sont listés ici pour une optimisation future si tu le souhaites.

### **🔧 Améliorations techniques**
| **Point** | **Problème** | **Solution proposée** | **Priorité** |
|-----------|--------------|-----------------------|--------------|
| Encodage `main.css` | Anciennement en UTF-16LE | **✅ Corrigé** en UTF-8 | ❌ Plus nécessaire |
| `error_reporting` en production | Affiche les erreurs aux visiteurs | Désactiver avec `error_reporting(0);` | ⚠️ Moyenne |
| `target="_blank"` sans `rel` | Risque de sécurité (tabnabbing) | Ajouter `rel="noopener noreferrer"` | ⚠️ Moyenne |
| Fichiers non minifiés | Temps de chargement légèrement plus long | Minifier CSS/JS pour la production | 🟢 Basse |
| Pas de favicon | Manque une icône dans l'onglet | Ajouter un `favicon.ico` | 🟢 Basse |
| Balises PHP fermantes manquantes | Non conforme PSR-12 | Ajouter `?>` dans `header.php` et `footer.php` | 🟢 Basse |

### **🎨 Améliorations design/UX**
| **Point** | **Problème** | **Solution proposée** | **Priorité** |
|-----------|--------------|-----------------------|--------------|
| Focus invisible | Difficile pour les utilisateurs clavier | Ajouter un style `outline` visible | ⚠️ Moyenne |
| Pas de meta description | Moins bon pour le SEO | Ajouter `<meta name="description">` | 🟢 Basse |
| Pas de balises Open Graph | Partage sur les réseaux sociaux moins joli | Ajouter les meta OG | 🟢 Basse |

### **📁 Améliorations structure**
| **Point** | **Problème** | **Solution proposée** | **Priorité** |
|-----------|--------------|-----------------------|--------------|
| Préfixe `ds-` peu intuitif | Difficile à comprendre pour toi | Renommer en `port-` (ex: `port-banner`) | 🟢 Basse |
| CSS très long | Difficile à maintenir | Séparer en plusieurs fichiers (ex: `styles.css`, `animations.css`) | 🟢 Basse |

---

## 📁 **STRUCTURE DES FICHIERS**

```
Portfolio/
├── index.php          # Page d'accueil
├── about.php          # Page "À propos"
├── contact.php        # Page "Contact"
├── projets.php        # Page "Projets"
├── formation.php      # Page "Formation" (avec frise chronologique)
├── veilletechno.php   # Page "Veille Technologique" (fenêtres cliquables)
├── header.php         # En-tête commun (menu, dépendances CSS/JS)
├── footer.php         # Pied de page commun (compétences, copyright, scripts JS)
├── NOTES.md           # Ce fichier 📝
└── assets/
    ├── css/
    │   ├── main.css       # Styles principaux (1416 lignes)
    │   └── main.css.backup # Backup avant modification
    ├── js/
    │   ├── main.js            # Logique du menu burger et slider
    │   └── typing-animation.js # Animation de frappe (effet terminal)
    ├── images/          # Images du portfolio
    │   ├── banner-image.png
    │   ├── code-about.jpg
    │   ├── python.jpg
    │   └── ...
    └── cv-ajour.pdf     # CV téléchargeable
```

---

## 🎯 **FONCTIONNALITÉS CLÉS**

### **1. Menu Responsive (Burger)**
- **Fichiers** : `header.php`, `main.js`
- **Fonctionnement** :
  - Sur mobile (< 1150px), le menu burger apparaît.
  - Au clic, le menu déroulant s'affiche.
  - Ferme automatiquement quand on clique sur un lien ou en dehors.
- **Classes CSS** : `ds-menu-mobile`, `burger-btn`, `menu-hidden`, `menu-visible`

### **2. Animation de Frappes (Typing Effect)**
- **Fichiers** : `typing-animation.js`, `index.php`, `about.php`, etc.
- **Fonctionnement** :
  - Affiche un texte qui s'écrit comme dans un terminal.
  - Messages : "booting portfolio system...", "loading assets /ui...", etc.
- **Classe CSS** : `typing-animation`, `cursor`

### **3. Slider Témoignages**
- **Fichiers** : `footer.php`, `main.js`
- **Fonctionnement** :
  - Utilise **Slick Carousel** pour afficher les témoignages.
  - Configuration : `infinite: true`, `autoplay: true`, `autoplaySpeed: 4000`
- **Classe CSS** : `ds-testimonials-slider`

### **4. Frise Chronologique (Formation)**
- **Fichier** : `formation.php`
- **Fonctionnement** :
  - Affiche ton parcours sous forme de timeline.
  - Alternance gauche/droite pour les événements.
- **Classes CSS** : `timeline-container`, `timeline-event`, `timeline-content`

### **5. Grille des Projets**
- **Fichier** : `projets.php`
- **Fonctionnement** :
  - Affiche les projets sous forme de grille responsive.
  - Chaque projet est une tuile cliquable (`project-tile`).
- **Classes CSS** : `projects-grid`, `project-tile`, `project-content`

### **6. Fenêtres de Veille Technologique**
- **Fichier** : `veilletechno.php`
- **Fonctionnement** :
  - Affiche des cartes sous forme de fenêtres d'OS.
  - Cliquables pour ouvrir les articles.
- **Classes CSS** : `window-grid`, `window`, `window.large`, `window-stack`

---

## 📞 **COMMENT REPRENDRE LE CODE RAPIDEMENT ?**

### **1. Pour modifier le design**
- **Couleurs** : Modifie les codes hexadécimaux dans `main.css` (ex: `#2A2A2A` pour le fond, `#CBFE00` pour l'accent).
- **Polices** : Change les `font-family` dans `:root` ou dans les règles CSS.
- **Taille des éléments** : Modifie les valeurs en `rem` (ex: `--font_48: 3rem`).

### **2. Pour ajouter une nouvelle page**
1. Crée un nouveau fichier PHP (ex: `blog.php`).
2. Ajoute :
   ```php
   <?php
   $page_title = 'Titre de la page - Portfolio Timothée Letourneau';
   include 'header.php';
   ?>
   
   <!-- Ton contenu ici -->
   
   <?php include 'footer.php'; ?>
   ```
3. Ajoute un lien dans le menu (`header.php`).

### **3. Pour ajouter un projet**
- Dans `projets.php`, ajoute une nouvelle tuile :
  ```html
  <a href="LIEN_VERS_PROJET" class="project-tile" title="Nom du projet">
    <img src="assets/images/NOM_IMAGE.jpg">
    <div class="project-content">
      <span>Nom du projet</span>
    </div>
  </a>
  ```

### **4. Pour modifier le menu**
- Dans `header.php`, modifie les liens dans `ds-menu-desktop` (grand écran) et `ds-menu-dropdown` (mobile).

### **5. Pour ajouter une compétence**
- Dans `footer.php`, ajoute un nouvel élément dans `competences-list` :
  ```html
  <div class="competence-item">
    <i class="fab fa-NOUVELLE_ICONE"></i>
    <span>Nouvelle compétence</span>
  </div>
  ```
  (Trouve les icônes sur [Font Awesome](https://fontawesome.com/icons) ou [Remixicon](https://remixicon.com/))

---

## 🔍 **OUTILS UTILES POUR LA MAINTENANCE**

### **Vérification des normes**
- **HTML** : [W3C Validator](https://validator.w3.org/)
- **CSS** : [W3C CSS Validator](https://jigsaw.w3.org/css-validator/)
- **PHP** : [PHP Code Sniffer](https://github.com/squizlabs/PHP_CodeSniffer) (pour PSR-12)

### **Optimisation**
- **Images** : [TinyPNG](https://tinypng.com/) (compression sans perte)
- **CSS/JS** : [Minifier](https://www.minifier.org/) (réduction de la taille)

### **Accessibilité**
- **Test** : [WAVE](https://wave.webaim.org/) (vérification WCAG)
- **Contraste** : [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/)

---

## 📝 **HISTORIQUE DES MODIFICATIONS**

| **Date** | **Modification** | **Fichiers concernés** | **Auteur** |
|----------|------------------|------------------------|------------|
| 2025-06-XX | Conversion de `main.css` en UTF-8 | `assets/css/main.css` | Vibe Code |
| 2025-06-XX | Création de `NOTES.md` | `NOTES.md` | Vibe Code |
| 2025-06-XX | Ajout de commentaires dans les fichiers PHP/JS | Tous les fichiers PHP/JS | Vibe Code |

---

## 💬 **CONTACT ET SUPPORT**

- **Auteur du portfolio** : Timothée Letourneau
- **Email** : tletourneau78@gmail.com
- **GitHub** : [timotheeletourneau](https://github.com/timotheeletourneau)

---

> **✨ Conseil final** : 
> **Ne change rien si tu n'es pas sûr !** Ton code est déjà bien structuré et fonctionnel.
> Utilise ce fichier `NOTES.md` comme référence pour comprendre et modifier ton portfolio en toute confiance.

---

*Généré avec ❤️ par [Vibe Code](https://vibe.codes/)* 🚀
