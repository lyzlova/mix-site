const dropdownFilter = document.querySelectorAll('[data-select]');

if (dropdownFilter) {
    dropdownFilter.forEach((elem) => {
        elem.addEventListener("click", changePath);
    })
}

function changePath(e) {
    this.querySelector('[data-select-path]').classList.toggle('is-open');
    this.nextElementSibling.classList.toggle("visually-hidden");
}
