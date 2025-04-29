document.addEventListener('DOMContentLoaded', () => {
    const emblaNode = document.querySelector('.embla');
    const options = { loop: true };
    const emblaApi = EmblaCarousel(emblaNode, options);

    const dots = document.querySelector('.embla__dots');
    const slidesCount = emblaApi.slideNodes().length;

    const dotNodes = Array.from({ length: slidesCount }, (_, index) => {
        const btn = document.createElement('button');
        btn.classList.add('embla__dot');
        btn.addEventListener('click', () => emblaApi.scrollTo(index));
        dots.appendChild(btn);
        return btn;
    });

    const updateDots = () => {
        const selected = emblaApi.selectedScrollSnap();
        dotNodes.forEach((dot, i) => {
            dot.classList.toggle('is-selected', i === selected);
        });
    };

    emblaApi.on('select', updateDots);
    updateDots();

    const AUTOPLAY_MS = 5_000;
    let autoplayId = null;

    const startAutoplay = () => {
        stopAutoplay();
        autoplayId = setInterval(() => emblaApi.scrollNext(), AUTOPLAY_MS);
    };

    const stopAutoplay = () => {
        if (autoplayId) {
            clearInterval(autoplayId);
            autoplayId = null;
        }
    };

    emblaApi.on('pointerDown', stopAutoplay);
    emblaApi.on('pointerUp', startAutoplay);
    emblaApi.on('select', startAutoplay);

    startAutoplay();
});
