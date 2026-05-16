(function () {
    /* HAMBURGER MENU */
    const navToggle = document.getElementById('navToggle');
    const navCollapse = document.getElementById('navCollapse');
    if (navToggle && navCollapse) {
        navToggle.addEventListener('click', () => {
            const open = navCollapse.classList.toggle('open');
            navToggle.textContent = open ? '✕' : '☰';
        });
        // close on link click
        navCollapse.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => {
                navCollapse.classList.remove('open');
                navToggle.textContent = '☰';
            });
        });
    }

    /* THEME SWITCHER */
    const themes = ['green', 'dark', 'light'];
    const saved = localStorage.getItem('theme') || 'green';
    const themeSel = document.getElementById('themeSelect');
    const themeLabel = document.querySelector('.theme-switcher .filter-select-label');

    function applyTheme(theme) {
        document.body.classList.remove(...themes.map(t => 'theme-' + t));
        if (theme !== 'green') document.body.classList.add('theme-' + theme);
        if (themeSel) themeSel.value = theme;
        if (themeLabel) {
            const opt = themeSel.options[themeSel.selectedIndex];
            themeLabel.innerHTML = opt.text + ' <span class="filter-arrow">▾</span>';
        }
        localStorage.setItem('theme', theme);
    }

    applyTheme(saved);

    if (themeSel) {
        themeSel.addEventListener('change', () => applyTheme(themeSel.value));
    }


    /* CLOCK – only runs if #sys-time exists (home page) */
    const clockEl = document.getElementById('sys-time');
    if (clockEl) {
        function updateClock() {
            const now = new Date();
            const t = [now.getHours(), now.getMinutes(), now.getSeconds()]
                .map(n => String(n).padStart(2, '0')).join(':');
            clockEl.innerHTML = '<span class="s-label">TIME:</span> <span class="s-val">' + t + '</span>';
        }
        setInterval(updateClock, 1000);
        updateClock();
    }

    /* SCANLINES TOGGLE – all pages */
    let active = true;
    const styleTag = document.createElement('style');
    styleTag.textContent = 'body.scan-off::before { content: none !important; }';
    document.head.appendChild(styleTag);

    function setScanlines(on) {
        active = on;
        document.body.classList.toggle('scan-off', !on);
        document.getElementById('toggleScanBtn').textContent = on ? 'SCANLINES: ON' : 'SCANLINES: OFF';
        const fl = document.getElementById('toggleScanlinesBtn');
        if (fl) fl.textContent = on ? '[DISABLE SCANLINES]' : '[ENABLE SCANLINES]';
    }

    document.getElementById('toggleScanBtn').addEventListener('click', () => setScanlines(!active));
    const fl = document.getElementById('toggleScanlinesBtn');
    if (fl) fl.addEventListener('click', e => { e.preventDefault(); setScanlines(!active); });
})();
