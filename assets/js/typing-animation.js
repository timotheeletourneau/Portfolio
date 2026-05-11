window.addEventListener("DOMContentLoaded", () => {

    const el = document.querySelector(".typing-animation");
    if (!el) return;

    const texts = [
        "> booting portfolio system...",
        "> loading assets /ui...",
        "> initializing layout engine...",
        "> compiling modules...",
        "> connecting components...",
        "> rendering interface...",
        "[OK] portfolio ready."
    ];

    let i = 0;
    let j = 0;
    let deleting = false;

    function loop() {
        const txt = texts[i];

        let visibleText = txt.substring(0, j);

        el.innerHTML = visibleText + "<span class='cursor'>▍</span>";

        if (!deleting) j++;
        else j--;

        let speed = deleting ? 40 : 80;

        if (!deleting && j > txt.length) {
            deleting = true;
            speed = 1000;
        }

        if (deleting && j < 0) {
            deleting = false;
            i = (i + 1) % texts.length;
            speed = 400;
        }

        setTimeout(loop, speed);
    }

    loop();
});