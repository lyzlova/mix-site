import $ from "jquery";
import "@fancyapps/fancybox";

const images = document.querySelectorAll('[data-fancybox]');

if(images) {
    $(images).fancybox({
        beforeClose: function(){
            $(".slick-list").css({'overflow-x':'hidden'});
        },
    });
}
