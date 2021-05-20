const dropdownMenuCatalog = document.querySelector('[data-catalog-menu]');

document.addEventListener('click', (e) => {
    const parentBtnMenu = e.target.closest("[data-catalog-menu-button]");
    const parentCatalogMenu = e.target.closest("[data-catalog-menu]");

    if (parentBtnMenu) {
        dropdownMenuCatalog.classList.toggle("visually-hidden");
    }

    if (!parentCatalogMenu && !parentBtnMenu) {
        dropdownMenuCatalog.classList.add("visually-hidden");
    }
})
