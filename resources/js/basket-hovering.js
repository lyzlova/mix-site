const _ = require("lodash");
import $ from 'jquery';

const mediaQuery = window.matchMedia('(min-width: 1024px)');

if(mediaQuery.matches) {
    $(window).on("mousemove", _.throttle(onMouseMove, 2000));

    const refs = {
        shoppingCard: document.querySelector("[data-shopping-card]"),
        basketHovering: document.querySelector('[data-basket-hovering]'),
    }

    function addEvent(e) {
        e.preventDefault();
        refs.basketHovering.classList.add('visually-hidden');
    }

    function removeEvent(e) {
        e.preventDefault();
        refs.basketHovering.classList.remove('visually-hidden');
    }

    function onMouseMove() {
        if (refs.shoppingCard && refs.basketHovering) {
            refs.shoppingCard.addEventListener("mouseenter", removeEvent);
            refs.shoppingCard.addEventListener("mouseleave", addEvent)
            refs.basketHovering.addEventListener("mouseenter", removeEvent);
            refs.basketHovering.addEventListener("mouseleave", addEvent)
        }
    }
}
