import Glide, { Autoplay, Swipe, Controls,Breakpoints } from '@glidejs/glide/dist/glide.modular.esm'

export default function init({ el }) {
    /* The original element that requested the module */
    const context = el;
    // eslint-disable-next-line no-new

    const elements = {
        carousel : context.querySelector('[data-carousel]'),
    }

    new Glide(elements.carousel, {
        type: 'carousel',
        perView: 4,
        // bound: true,
        gap:25,
        autoplay: 6000,
        swipe: true,
        breakpoints:{
            440:{
                perView:1,
            },
            1024:{
                perView:2
            },
            1250:{
                perView:3
            },
            1880:{
                perView: 4,


            }
        }
    }).mount({ Swipe, Controls,Breakpoints});

}