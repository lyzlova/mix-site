const dropdownPhones = document.querySelector('.dropdown-phones__menu');

document.addEventListener('click', changePath);

function changePath(e) {
    const parentPath = e.target.closest(".dropdown-phones__toggle");
    const parentDropdownPhones = e.target.closest(".dropdown-phones__menu");

    if (parentPath) {
        parentPath.classList.toggle("active");
        dropdownPhones.classList.toggle("visually-hidden");
    }

    if (!parentPath && !parentDropdownPhones) {
        dropdownPhones.classList.add("visually-hidden");
    }
}
