/* ======================================================================
   ANIMATION DE FRAPPE (Effet Terminal)
   - Crée un effet de texte qui s'écrit comme dans un terminal
   - Utilisé sur toutes les pages (index.php, about.php, etc.)
   - Style du curseur défini dans main.css (.cursor)
   ====================================================================== */

window.addEventListener("DOMContentLoaded", () => {

    /* Récupère l'élément avec la classe .typing-animation */
    const el = document.querySelector(".typing-animation");
    if (!el) return; // Si l'élément n'existe pas, on arrête le script

    /* Liste des textes à afficher (effet terminal) */
    const texts = [
        "> booting portfolio system...",    // Message 1 : Démarrage
        "> loading assets /ui...",           // Message 2 : Chargement des ressources
        "> initializing layout engine...",   // Message 3 : Initialisation du moteur
        "> compiling modules...",            // Message 4 : Compilation
        "> connecting components...",        // Message 5 : Connexion des composants
        "> rendering interface...",          // Message 6 : Rendu de l'interface
        "[OK] portfolio ready."              // Message final : Portfolio prêt
    ];

    /* Index du texte actuel et position dans le texte */
    let i = 0;        // Index du texte dans le tableau
    let j = 0;        // Position du caractère dans le texte
    let deleting = false; // État : true = en train d'effacer, false = en train d'écrire

    /* Fonction principale qui gère l'animation */
    function loop() {
        const txt = texts[i]; // Texte actuel

        /* Extrait le texte visible (de 0 à j caractères) */
        let visibleText = txt.substring(0, j);

        /* Met à jour le HTML de l'élément avec le texte visible + curseur clignotant */
        el.innerHTML = visibleText + "<span class='cursor'>▍</span>";

        /* Incrémente ou décrémente j selon l'état */
        if (!deleting) j++;
        else j--;

        /* Vitesse d'animation : 40ms pour effacer, 80ms pour écrire */
        let speed = deleting ? 40 : 80;

        /* Si on a fini d'écrire le texte, on passe en mode effacement */
        if (!deleting && j > txt.length) {
            deleting = true;
            speed = 1000; // Pause de 1 seconde avant d'effacer
        }

        /* Si on a fini d'effacer, on passe au texte suivant */
        if (deleting && j < 0) {
            deleting = false;
            i = (i + 1) % texts.length; // Passe au texte suivant (boucle à la fin)
            speed = 400; // Pause de 0.4 seconde avant d'écrire
        }

        /* Relance la boucle après le délai */
        setTimeout(loop, speed);
    }

    /* Démarre l'animation */
    loop();
});