/**
 * Main JavaScript file for Ayumi Japan theme
 */

(function() {
    'use strict';

    // Mobile menu toggle
    const mobileMenuInit = () => {
        const menuToggle = document.querySelector('.menu-toggle');
        const navMenu = document.querySelector('.nav-menu');

        if (!menuToggle || !navMenu) return;

        menuToggle.addEventListener('click', function() {
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            navMenu.classList.toggle('toggled');

            // Animate menu icon
            const menuIcon = this.querySelector('.menu-icon');
            if (menuIcon) {
                menuIcon.style.transform = expanded ? 'rotate(0deg)' : 'rotate(90deg)';
            }
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            const isClickInsideNav = navMenu.contains(event.target);
            const isClickOnToggle = menuToggle.contains(event.target);

            if (!isClickInsideNav && !isClickOnToggle && navMenu.classList.contains('toggled')) {
                navMenu.classList.remove('toggled');
                menuToggle.setAttribute('aria-expanded', 'false');

                const menuIcon = menuToggle.querySelector('.menu-icon');
                if (menuIcon) {
                    menuIcon.style.transform = 'rotate(0deg)';
                }
            }
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
