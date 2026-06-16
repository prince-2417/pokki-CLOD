
const grid = document.getElementById('productsGrid');
const allCards = Array.from(grid.querySelectorAll('.product-card'));

document.getElementById('totalCount').textContent = allCards.length;

// ── APPLY FILTERS ──
function applyFilters() {
    const cats = getChecked('catFilters');
    const sizes = getChecked('sizeFilters');
    const ratings = getChecked('ratingFilters');
    const maxPrice = parseInt(document.getElementById('priceRange').value);
    const colors = Array.from(document.querySelectorAll('.swatch.active')).map(s => s.dataset.color);

    let visible = 0;
    allCards.forEach(card => {
        const cardSizes = card.dataset.size.split(' ');
        const ok =
            (cats.length === 0 || cats.includes(card.dataset.cat)) &&
            (sizes.length === 0 || sizes.some(s => cardSizes.includes(s))) &&
            (parseInt(card.dataset.price) <= maxPrice) &&
            (ratings.length === 0 || ratings.some(r => parseInt(card.dataset.rating) >= parseInt(r))) &&
            (colors.length === 0 || colors.includes(card.dataset.color));

        card.style.display = ok ? '' : 'none';
        if (ok) visible++;
    });

    document.getElementById('visibleCount').textContent = visible;
    document.getElementById('noResults').style.display = visible === 0 ? 'block' : 'none';
    document.getElementById('pagination').style.display = visible === 0 ? 'none' : 'flex';
    renderTags();
}

function getChecked(id) {
    return Array.from(document.querySelectorAll('#' + id + ' input:checked')).map(cb => cb.value);
}

// ── ACTIVE TAGS ──
function renderTags() {
    const wrap = document.getElementById('activeTags');
    wrap.innerHTML = '';

    // category tags
    document.querySelectorAll('#catFilters input:checked').forEach(cb => {
        addTag(cb.closest('label').textContent.trim().replace(/\d+/g, '').trim(), cb);
    });
    // size tags
    document.querySelectorAll('#sizeFilters input:checked').forEach(cb => {
        addTag('Size: ' + cb.value.toUpperCase(), cb);
    });
    // rating tags
    document.querySelectorAll('#ratingFilters input:checked').forEach(cb => {
        addTag(cb.value + '+ Stars', cb);
    });
    // color tags
    document.querySelectorAll('.swatch.active').forEach(s => {
        const tag = document.createElement('div');
        tag.className = 'filter-tag';
        tag.innerHTML = s.title + ' <button onclick="this.closest(\'.filter-tag\').remove(); document.querySelector(\'.swatch[title=' + s.title + ']\').classList.remove(\'active\'); applyFilters()">✕</button>';
        wrap.appendChild(tag);
    });
    // price tag
    const price = parseInt(document.getElementById('priceRange').value);
    if (price < 5000) {
        const tag = document.createElement('div');
        tag.className = 'filter-tag';
        tag.innerHTML = 'Under ₹' + price.toLocaleString('en-IN') + ' <button onclick="document.getElementById(\'priceRange\').value=5000; updatePrice(5000)">✕</button>';
        wrap.appendChild(tag);
    }
}

function addTag(text, cb) {
    const tag = document.createElement('div');
    tag.className = 'filter-tag';
    tag.innerHTML = text + ' <button>✕</button>';
    tag.querySelector('button').onclick = () => { cb.checked = false; applyFilters(); };
    document.getElementById('activeTags').appendChild(tag);
}

// ── FILTER ACCORDION ──
function toggleGroup(el) {
    el.classList.toggle('open');
    const next = el.nextElementSibling;
    next.style.display = el.classList.contains('open') ? 'flex' : 'none';
}

// ── COLOR SWATCH ──
function toggleSwatch(el) {
    el.classList.toggle('active');
    applyFilters();
}

// ── PRICE RANGE ──
function updatePrice(val) {
    document.getElementById('priceVal').textContent = '₹' + parseInt(val).toLocaleString('en-IN');
    applyFilters();
}

// ── SORT ──
document.getElementById('sortSelect').addEventListener('change', function () {
    const visible = allCards.filter(c => c.style.display !== 'none');
    if (this.value === 'low') visible.sort((a, b) => +a.dataset.price - +b.dataset.price);
    if (this.value === 'high') visible.sort((a, b) => +b.dataset.price - +a.dataset.price);
    if (this.value === 'rating') visible.sort((a, b) => +b.dataset.rating - +a.dataset.rating);
    if (this.value === 'az') visible.sort((a, b) => a.querySelector('h4').textContent.localeCompare(b.querySelector('h4').textContent));
    visible.forEach(c => grid.appendChild(c));
});

// ── GRID / LIST VIEW ──
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

// ── RESET ──
function resetFilters() {
    document.querySelectorAll('.filter-options input').forEach(cb => cb.checked = false);
    document.querySelectorAll('.swatch').forEach(s => s.classList.remove('active'));
    document.getElementById('priceRange').value = 5000;
    document.getElementById('priceVal').textContent = '₹5,000';
    applyFilters();
    if (window.innerWidth <= 768) closeFilterDrawer();
}

// ── FILTER DRAWER (mobile) ──
function openFilterDrawer() {
    document.getElementById('filterSidebar').classList.add('open');
    document.getElementById('filterOverlay').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeFilterDrawer() {
    document.getElementById('filterSidebar').classList.remove('open');
    document.getElementById('filterOverlay').classList.remove('active');
    document.body.style.overflow = '';
}

document.getElementById('filterToggleBtn').addEventListener('click', function () {
    const sidebar = document.getElementById('filterSidebar');
    sidebar.classList.contains('open') ? closeFilterDrawer() : openFilterDrawer();
});

document.getElementById('filterOverlay').addEventListener('click', closeFilterDrawer);

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeFilterDrawer();
});

window.addEventListener('resize', function () {
    if (window.innerWidth > 768) closeFilterDrawer();
});

// ── PAGINATION ──
document.querySelectorAll('.pagination button:not(.prev-next)').forEach(btn => {
    btn.addEventListener('click', function () {
        document.querySelectorAll('.pagination button').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
    });
});

// ── INIT ──
applyFilters();
