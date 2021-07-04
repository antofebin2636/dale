// import { gsap } from 'gsap';
// import { SplitText } from 'gsap/SplitText'
// import { ElementObserver } from 'viewprt';
//
// export default function init() {
//
//     const title = document.querySelectorAll('[data-title]');
//     const click = document.querySelector('[data-click]');
//
//     if (title) {
//         title.forEach((element) => {
//             gsap.set(element, { autoAlpha: 0 });
//
//             ElementObserver(element, {
//
//                 onEnter: () => {
//
//                     const timeline = gsap.timeline({
//                             delay: 0.6
//                         }
//                     );
//
//                     const split = new SplitText(element, {
//                         type: 'words',
//                     })
//                     gsap.set(element, { autoAlpha: 1 });
//                     timeline.fromTo(split.words, {
//                             x: -15,
//                             opacity: 0,
//
//                         },
//                         {
//                             duration: 1,
//                             x: 0,
//                             autoAlpha:1,
//                             opacity: 1,
//                             stagger: 0.1
//                         }
//                     )
//                 },
//                 offset: 0,
//                 once: true,
//             });
//         });
//     }
//
//     click.addEventListener('click',function (){
//             this.classList.toggle('Down');
//             document.querySelector('.HeroBanner__descContent').classList.toggle('Disable');
//     });
//
//
// }