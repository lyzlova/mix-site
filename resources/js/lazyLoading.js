import "lodash";

const lazyImages = document.querySelectorAll('img[loading="lazy"]');

const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return
        }

        const image = entry.target;
        image.src = image.dataset.src;
        observer.unobserve((image))
    });
});

lazyImages.forEach(img => {
    observer.observe(img);
});

