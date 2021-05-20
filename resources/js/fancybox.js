import $ from "jquery";
import "@fancyapps/fancybox";

const images = document.querySelectorAll('[data-fancybox]');

if(images) {
    $(images).fancybox({
        animationEffect: 'slide'
    });
}
