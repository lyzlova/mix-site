const refs = {
    filterBackdrop: document.querySelector("[data-filter-backdrop]"),
    openFilter: document.querySelector("[data-open-filter]"),
    closeFilter: document.querySelector("[data-close-filter]"),
}

function onCloseMobileFilter() {
    refs.filterBackdrop.classList.toggle('is-hidden');
    document.body.classList.toggle('modal-open');
}

function onEscKeyPress(e){
    if (e.code === 'Escape') {
        onCloseMobileFilter();
    }
}

if (refs.openFilter || refs.closeFilter) {
    refs.openFilter.addEventListener('click', (e) => {
        e.preventDefault();
        onCloseMobileFilter();
        window.addEventListener('keydown', onEscKeyPress);
    });

    refs.closeFilter.addEventListener('click', (e) => {
        e.preventDefault();
        onCloseMobileFilter();
        window.removeEventListener('keydown', onEscKeyPress);
    });
}

if (refs.filterBackdrop) {
    refs.filterBackdrop.addEventListener('click', (e) => {
        e.preventDefault();

        if (e.target === e.currentTarget) {
            onCloseMobileFilter();
        }

        window.removeEventListener('keydown', onEscKeyPress);
    });
}
