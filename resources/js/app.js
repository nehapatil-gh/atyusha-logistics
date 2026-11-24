const menuToggle = document.querySelector('[data-nav-toggle]');
const navigation = document.querySelector('[data-primary-navigation]');

if (menuToggle instanceof HTMLButtonElement && navigation instanceof HTMLElement) {
    const closeNavigation = () => {
        menuToggle.setAttribute('aria-expanded', 'false');
        navigation.classList.remove('is-open');
    };

    menuToggle.addEventListener('click', () => {
        const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';

        menuToggle.setAttribute('aria-expanded', String(!isExpanded));
        navigation.classList.toggle('is-open', !isExpanded);
    });

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeNavigation);
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeNavigation();
        }
    });
}

document.querySelectorAll('[data-submit-once]').forEach((form) => {
    if (!(form instanceof HTMLFormElement)) {
        return;
    }

    form.addEventListener('submit', () => {
        const submitButton = form.querySelector('button[type="submit"]');

        if (submitButton instanceof HTMLButtonElement) {
            submitButton.disabled = true;
            submitButton.setAttribute('aria-busy', 'true');
        }
    });
});
