/**
 * Main JavaScript file for Ayumi Japan theme
 */

(function() {
    'use strict';

    // Mobile menu toggle
    const mobileMenuInit = () => {
        const navigation = document.querySelector('.main-navigation');
        if (!navigation) return;

        const menuToggle = document.createElement('button');
        menuToggle.classList.add('menu-toggle');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.innerHTML = '<span class="screen-reader-text">メニュー</span>☰';

        navigation.parentNode.insertBefore(menuToggle, navigation);

        menuToggle.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            navigation.classList.toggle('toggled');
        });
    };

    // Smooth scroll for anchor links
    const smoothScrollInit = () => {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    };

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            mobileMenuInit();
            smoothScrollInit();
        });
    } else {
        mobileMenuInit();
        smoothScrollInit();
    }

})();
