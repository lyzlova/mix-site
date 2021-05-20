import $ from 'jquery';
import 'slick-carousel';

const categoriesList = document.querySelector(".categories__list");

if(categoriesList) {
    $(categoriesList).slick({
        draggable: true,
        slidesToScroll: 2,
        variableWidth: true,

        infinite: false,
        arrows: false,
        loop: true,

        responsive: [
            {
                breakpoint: 2561,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 2,
                },
            },

            {
                breakpoint: 1400,
                settings: {
                    slidesToShow: 5,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    // centerMode: true,
                },
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    // centerMode: true,
                },
            },
        ],
        mobileFirst: true,
    });
}


