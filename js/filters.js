(function () {
    const btns    = document.querySelectorAll('.filter-btn');
    const grid    = document.querySelector('.grid-games');
    const countEl = document.getElementById('game-count');
    const sortSel = document.getElementById('sortSelect');
    if (!btns.length || !grid) return;

    const totalCards = grid.querySelectorAll('.game-card').length;
    let activeFilter = 'all';

    function render() {
        const cards  = [...grid.querySelectorAll('.game-card')];
        const sortBy = sortSel ? sortSel.value : 'rating';

        cards.sort((a, b) => {
            if (sortBy === 'name') {
                const na = a.getAttribute('data-name') || '';
                const nb = b.getAttribute('data-name') || '';
                return na.localeCompare(nb);
            }
            return parseInt(b.getAttribute('data-rating') || 0, 10)
                 - parseInt(a.getAttribute('data-rating') || 0, 10);
        });

        cards.forEach(card => grid.appendChild(card));

        let visible = 0;
        cards.forEach(card => {
            const platforms = (card.getAttribute('data-platforms') || '').split(' ');
            const show = activeFilter === 'all' || platforms.includes(activeFilter);
            card.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        if (countEl) countEl.textContent = visible + ' title' + (visible !== 1 ? 's' : '') + (visible < totalCards ? ' of ' + totalCards : '');
    }

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            activeFilter = btn.getAttribute('data-filter');
            btns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            render();
        });
    });

    if (sortSel) sortSel.addEventListener('change', render);

    render();
})();
