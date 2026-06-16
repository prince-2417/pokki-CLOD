const grid = document.getElementById('productsGrid');
const allCards = Array.from(grid.querySelectorAll('.product-card'));

// Category tab filter
function filterCat(btn, cat) {
    document.querySelectorAll('.cat-tab').forEach(t => t.classList.remove('active'));
    btn.classList.add('active');
    let count = 0;
    allCards.forEach(card => {
        const show = cat === 'all' || card.dataset.cat === cat;
        card.style.display = show ? '' : 'none';
        if (show) count++;
    });
    document.getElementById('visibleCount').textContent = count;
}

// Sort
document.getElementById('sortSelect').addEventListener('change', function () {
    const val = this.value;
    const visible = allCards.filter(c => c.style.display !== 'none');
    if (val.includes('A to Z')) visible.sort((a, b) => a.querySelector('h4').textContent.localeCompare(b.querySelector('h4').textContent));
    else if (val.includes('Z to A')) visible.sort((a, b) => b.querySelector('h4').textContent.localeCompare(a.querySelector('h4').textContent));
    visible.forEach(c => grid.appendChild(c));
});

// Grid / List toggle
document.getElementById('gridBtn').addEventListener('click', function () {
    grid.classList.remove('list-view');
    this.classList.add('active');
    document.getElementById('listBtn').classList.remove('active');
});

document.getElementById('listBtn').addEventListener('click', function () {
    grid.classList.add('list-view');
    this.classList.add('active');
    document.getElementById('gridBtn').classList.remove('active');
});

// Pagination
document.querySelectorAll('.pagination button:not(.prev-next)').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.pagination button').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});