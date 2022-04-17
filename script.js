const title = new SplitText("#title-text"),
    subtitle = new SplitText("#sub-title-text");

const t1 = new gsap.timeline();

t1.from(["#top-gradient", "#bottom-gradient"], 1, { ease: "power3.inOut", filter: "blur(0px)", opacity: 0 })
    .from("#green-filter", 1.1, { opacity: 0, scale: 3 }, "-=50%")
    .to("#green-filter", 0.3, { opacity: 0, scale: 3 })
    .to(["#top-gradient", "#bottom-gradient"], 0.3, { filter: "blur(0px)", opacity: 0 }, "-=100%")
    .set("#logo", { opacity: 1 })
    .from(title.chars, 0.2, { ease: "back", filter: "blur(0.3em)", opacity: 0, scale: 1.5, stagger: 0.02 })
    .from(subtitle.chars, 0.2, { delay: 0.25, filter: "blur(0.3em)", opacity: 0, scale: 0.5, stagger: 0.02, xPercent: -25 })
    .from("#logo-border", 0.4, { ease: "power3.out", opacity: 0, scale: 0.75 }, "-=100%")
    .from("#logo-border-inner", 0.4, { ease: "power3.out", scale: 0.75 }, "-=100%")
    .to("#logo", 1.5, { scale: 1.1 }, "-=20%")
    .to(["#logo-border", "#logo-border-inner"], 1.5, { ease: "power3.out", scale: 1.1 }, "-=100%")
    .to("#logo-border", 1.25, { ease: "power4.in", scale: 8 }, "-=50%")
    .to("#logo-border-inner", 0.5, { ease: "power4.in", scale: 8 }, "-=60%")
    .to("#logo", 0.25, { opacity: 0, scale: 1.2 }, "-=50%");

function restart() {
    t1.restart();
    var audio = new Audio('sound.mp3');
    audio.play();
}

document.getElementById("restart-button").onclick = () => restart();