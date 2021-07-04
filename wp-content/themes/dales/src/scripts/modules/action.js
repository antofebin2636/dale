import { gsap } from "gsap";
import { SplitText } from "gsap/SplitText";
import { ElementObserver } from "viewprt";

export default function init() {
    var slideUp = gsap.utils.toArray(".CtaBox__items");

    var boxUp = gsap.utils.toArray(".Box--up");

    slideUp.forEach((wrap) => {
        const boxes = wrap.querySelectorAll("[data-up]");
        const Img = wrap.querySelectorAll("[data-img]");
        const ImgShow = wrap.querySelectorAll("[data-imgShow]");
        const ImgShowNew = wrap.querySelectorAll("[data-imgShowNew]");

        ElementObserver(wrap, {
            onEnter: () => {
                const timeline = gsap.timeline({
                    delay: 0.6,
                });

                const timelineTwo = gsap.timeline({
                    delay: 0.6,
                });

                timelineTwo
                    .from(boxes, {
                        opacity: 0,
                        y: 50,
                        ease: "expo.out",
                        duration: 3,
                        stagger: 0.3,
                    })
                    .from(ImgShowNew, { opacity: 0, duration: 1 }, ">-3");

                timeline
                    .from(Img, { scaleX: 0, ease: "expo.out", duration: 1 })
                    .from(ImgShow, { opacity: 0, ease: "expo.out", duration: 1 });
            },
            offset: 0,
            once: true,
        });
    });

    boxUp.forEach((wrap) => {
        const boxUp = wrap.querySelectorAll("[data-lup]");
        ElementObserver(wrap, {
            onEnter: () => {
                gsap.from(boxUp, {
                    opacity: 0,
                    y: 50,
                    ease: "expo.out",
                    duration: 3,
                    stagger: 0.3,
                });
            },
            offset: 0,
            once: true,
        });
    });
}