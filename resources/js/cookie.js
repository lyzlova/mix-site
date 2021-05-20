import Cookies from 'js-cookie';

const cookies = document.querySelector('.cookies');
const cookiesButton = cookies.querySelector('.cookies__button');

if (!Cookies.get('ex1-cookies')) {
    window.setTimeout(cookiesInit, 2000);
}

cookiesButton.addEventListener('click', (e) => {
    cookies.classList.add('cookies--dismissed');

    Cookies.set('ex1-cookies', 'dismissed');
});

function cookiesInit() {
    cookies.classList.add('cookies--init');
}
