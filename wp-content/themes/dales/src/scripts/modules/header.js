export default function init({ el }) {

    document.querySelector('.menu__item--doner').addEventListener('click',function (){
        document.querySelector('.Mob__menu').classList.toggle('active');
    })

    document.querySelector('.Close').addEventListener('click',function (){
        document.querySelector('.Mob__menu').classList.toggle('active');
    })
}