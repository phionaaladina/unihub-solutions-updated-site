document.documentElement.classList.add('js');

document.addEventListener('DOMContentLoaded', () => {
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    const setMenu = (open) => {
        if (!menuButton || !mobileMenu) return;
        mobileMenu.classList.toggle('hidden', !open);
        menuButton.setAttribute('aria-expanded', String(open));
    };

    // Mobile menu toggle; close it after choosing a section
    menuButton?.addEventListener('click', () => {
        setMenu(menuButton.getAttribute('aria-expanded') !== 'true');
    });
    mobileMenu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => setMenu(false)));

    // Navbar shadow after scrolling
    const nav = document.getElementById('site-nav');

    // Scroll spy: highlight the nav item for the section in view
    const sections = [...document.querySelectorAll('[data-section]')];
    const navLinks = [...document.querySelectorAll('[data-nav]')];

    const updateActive = () => {
        nav?.classList.toggle('is-scrolled', window.scrollY > 8);
        if (!sections.length) return;

        const offset = (nav?.offsetHeight || 80) + 40;
        let current = sections[0].id;
        for (const section of sections) {
            if (section.getBoundingClientRect().top - offset <= 0) current = section.id;
        }
        // At the very bottom, the last section is active
        if (window.innerHeight + window.scrollY >= document.documentElement.scrollHeight - 2) {
            current = sections[sections.length - 1].id;
        }

        navLinks.forEach((link) => {
            const active = link.dataset.nav === current;
            link.classList.toggle('is-active', active);
            if (active) link.setAttribute('aria-current', 'true');
            else link.removeAttribute('aria-current');
        });
    };

    updateActive();
    window.addEventListener('scroll', updateActive, { passive: true });
    window.addEventListener('resize', updateActive);

    // Buttons that jump to the contact form can preselect its topic
    const topicSelect = document.getElementById('topic');
    document.querySelectorAll('[data-topic]').forEach((el) => {
        el.addEventListener('click', () => {
            if (topicSelect) topicSelect.value = el.dataset.topic;
        });
    });

    // Reveal on scroll
    const animated = document.querySelectorAll('[data-animate]');
    if (!('IntersectionObserver' in window)) {
        animated.forEach((el) => el.classList.add('is-visible'));
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    animated.forEach((el) => observer.observe(el));
});
