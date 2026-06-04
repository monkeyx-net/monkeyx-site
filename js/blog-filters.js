(function () {
    const filterSel = document.getElementById('blogFilterSelect');
    const grid      = document.querySelector('.grid-blog');
    const countEl   = document.getElementById('blog-count');
    if (!filterSel || !grid) return;

    const totalCards = grid.querySelectorAll('.blog-card').length;
    let activeFilter = 'all';

    function render() {
        const cards = [...grid.querySelectorAll('.blog-card')];
        let visible = 0;

        cards.forEach(card => {
            const tags = (card.getAttribute('data-tags') || '').split(' ');
            const show = activeFilter === 'all' || tags.includes(activeFilter);
            card.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        if (countEl) {
            countEl.textContent = visible + ' post' + (visible !== 1 ? 's' : '')
                + (visible < totalCards ? ' of ' + totalCards : '');
        }
    }

    const labelEl = document.querySelector('.blog-filter-wrap .filter-select-label');
    filterSel.addEventListener('change', () => {
        activeFilter = filterSel.value;
        if (labelEl) {
            const opt = filterSel.options[filterSel.selectedIndex];
            labelEl.innerHTML = opt.text + ' <span class="filter-arrow">▾</span>';
        }
        render();
    });

    render();
})();
