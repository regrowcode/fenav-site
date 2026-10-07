window.addEventListener('load', function () {
    const mobileToggle = document.getElementById('primary-menu-toggle');
    const mobileNav = document.getElementById('mobile-navigation');
    const openIcon = mobileToggle ? mobileToggle.querySelector('.menu-open-icon') : null;
    const closeIcon = mobileToggle ? mobileToggle.querySelector('.menu-close-icon') : null;

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', function (e) {
            e.preventDefault();
            const isHidden = mobileNav.classList.contains('hidden');
            if (isHidden) {
                mobileNav.classList.remove('hidden');
                mobileToggle.setAttribute('aria-expanded', 'true');
                if (openIcon) openIcon.classList.add('hidden');
                if (closeIcon) closeIcon.classList.remove('hidden');
            } else {
                mobileNav.classList.add('hidden');
                mobileToggle.setAttribute('aria-expanded', 'false');
                if (openIcon) openIcon.classList.remove('hidden');
                if (closeIcon) closeIcon.classList.add('hidden');
            }
        });
    }
});
