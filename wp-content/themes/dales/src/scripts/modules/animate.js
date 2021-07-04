import { gsap } from "gsap";
import { SplitText } from "gsap/SplitText";
import { ElementObserver } from "viewprt";

export default function init() {
    const title = document.querySelectorAll("[data-title]");
    const click = document.querySelector("[data-click]");
    const upTxt = document.querySelectorAll("[data-show]");
    var wrapper = gsap.utils.toArray(".TxtBox--ani");
    if (title) {
        title.forEach((element) => {
            gsap.set(element, { autoAlpha: 0 });

            ElementObserver(element, {
                onEnter: () => {
                    const timeline = gsap.timeline({
                        delay: 0.6,
                    });

                    const split = new SplitText(element, {
                        type: "words",
                    });
                    gsap.set(element, { autoAlpha: 1 });
                    timeline.fromTo(
                        split.words, {
                            x: -15,
                            opacity: 0,
                        }, {
                            duration: 1,
                            x: 0,
                            autoAlpha: 1,
                            opacity: 1,
                            stagger: 0.1,
                        }
                    );
                },
                offset: 0,
                once: true,
            });
        });
    }

    click.addEventListener("click", function() {
        this.classList.toggle("Down");
        document
            .querySelector(".HeroBanner__descContent")
            .classList.toggle("Disable");
    });

    upTxt.forEach((element) => {
        gsap.set(element, { autoAlpha: 0 });

        ElementObserver(element, {
            onEnter: () => {
                console.log(1);
                gsap.set(element, { autoAlpha: 1 });
                gsap.from(element, {
                    opacity: 0,
                    y: 50,
                    ease: "expo.out",
                    duration: 3,
                    stagger: 0.2,
                });
            },
            offset: 0,
            once: true,
        });
    });

    wrapper.forEach((wrap) => {
        const boxes = wrap.querySelectorAll("[data-shows]");
        const text = wrap.querySelectorAll("[data-text]");
        const cta = wrap.querySelectorAll("[data-cta]");
        ElementObserver(wrap, {
            onEnter: () => {
                const timeline = gsap.timeline({
                    delay: 0.6,
                });

                const split = new SplitText(text, {
                    type: "words",
                });
                timeline
                    .from(boxes, {
                        opacity: 0,
                        y: 100,
                        ease: "expo.out",
                        duration: 2,
                        stagger: 0.2,
                    })
                    .fromTo(
                        split.words, {
                            x: -15,
                            opacity: 0,
                        }, {
                            duration: 1,
                            x: 0,
                            autoAlpha: 1,
                            opacity: 1,
                            stagger: 0.1,
                        },
                        ">-2"
                    )
                    .from(
                        cta, {
                            opacity: 0,
                            y: 50,
                            ease: "expo.out",
                            duration: 3,
                        },
                        ">-1"
                    );
            },
            offset: 0,
            once: true,
        });
    });
}