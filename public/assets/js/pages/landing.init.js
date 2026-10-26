function updateNavbar() {
    const navbar = document.getElementById('navbar');

    if (navbar) {
        navbar.classList.toggle('is-sticky', window.scrollY >= 50);
    }
}

window.addEventListener('scroll', updateNavbar, { passive: true });
updateNavbar();

const mobileMenu = document.getElementById('navbarSupportedContent');

if (mobileMenu) {
    mobileMenu.querySelectorAll('a[href^="#"]').forEach((link) => {
        link.addEventListener('click', () => {
            if (window.matchMedia('(max-width: 991.98px)').matches && mobileMenu.classList.contains('show')) {
                bootstrap.Collapse.getOrCreateInstance(mobileMenu).hide();
            }
        });
    });
}

const reviewSlider = document.querySelector('.client-review-swiper');

if (reviewSlider) {
    new Swiper(reviewSlider, {
        loop: false,
        autoplay: { delay: 2500, disableOnInteraction: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        pagination: { clickable: true, el: '.swiper-pagination' },
    });
}

const contactForm = document.querySelector('form[action$="/contacto"]');

if (contactForm) {
    contactForm.addEventListener('submit', () => {
        const submitButton = contactForm.querySelector('button[type="submit"]');

        if (submitButton) {
            submitButton.disabled = true;
            submitButton.textContent = 'Enviando…';
        }
    });
}
