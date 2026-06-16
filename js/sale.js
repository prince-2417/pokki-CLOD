 const grid     = document.getElementById('productsGrid');
    const allCards = Array.from(grid.querySelectorAll('.product-card'));
    document.getElementById('totalCount').textContent = allCards.length;

    let activeDiscount = 'all';

    // COUNTDOWN — 3 days from now
    const target = new Date();
    target.setDate(target.getDate() + 3);

    function updateCountdown() {
      const diff = Math.max(target - new Date(), 0);
      const d = Math.floor(diff / 86400000);
      const h = Math.floor((diff % 86400000) / 3600000);
      const m = Math.floor((diff % 3600000) / 60000);
      const s = Math.floor((diff % 60000) / 1000);
      document.getElementById('cd-days').textContent  = String(d).padStart(2,'0');
      document.getElementById('cd-hours').textContent = String(h).padStart(2,'0');
      document.getElementById('cd-mins').textContent  = String(m).padStart(2,'0');
      document.getElementById('cd-secs').textContent  = String(s).padStart(2,'0');
    }
    updateCountdown();
    setInterval(updateCountdown, 1000);

    // DISCOUNT PILLS
    function filterDiscount(el, val) {
      document.querySelectorAll('.disc-pill').forEach(p => p.classList.remove('active'));
      el.classList.add('active');
      activeDiscount = val;
      applyFilters();
    }

    // APPLY FILTERS
    function applyFilters() {
      const cats    = getChecked('catFilters');
      const sizes   = getChecked('sizeFilters');
      const ratings = getChecked('ratingFilters');
      const maxPrice = parseInt(document.getElementById('priceRange').value);
      const colors  = Array.from(document.querySelectorAll('.swatch.active')).map(s => s.dataset.color);

      let visible = 0;
      allCards.forEach(card => {
        const cardSizes = card.dataset.size.split(' ');
        const disc = parseInt(card.dataset.discount);
        const discOk = activeDiscount === 'all' || disc >= parseInt(activeDiscount);

        const ok =
          discOk &&
          (cats.length === 0    || cats.includes(card.dataset.cat)) &&
          (sizes.length === 0   || sizes.some(s => cardSizes.includes(s))) &&
          (parseInt(card.dataset.price) <= maxPrice) &&
          (ratings.length === 0 || ratings.some(r => parseInt(card.dataset.rating) >= parseInt(r))) &&
          (colors.length === 0  || colors.includes(card.dataset.color));

        card.style.display = ok ? '' : 'none';
        if (ok) visible++;
      });

      document.getElementById('visibleCount').textContent = visible;
      document.getElementById('noResults').style.display  = visible === 0 ? 'block' : 'none';
      document.getElementById('pagination').style.display = visible === 0 ? 'none' : 'flex';
      renderTags();
    }

    function getChecked(id) {
      return Array.from(document.querySelectorAll('#' + id + ' input:checked')).map(cb => cb.value);
    }

    function renderTags() {
      const wrap = document.getElementById('activeTags');
      wrap.innerHTML = '';
      document.querySelectorAll('#catFilters input:checked').forEach(cb => addTag(cb.closest('label').textContent.trim().replace(/\d+/g,'').trim(), cb));
      document.querySelectorAll('#sizeFilters input:checked').forEach(cb => addTag('Size: ' + cb.value.toUpperCase(), cb));
      document.querySelectorAll('#ratingFilters input:checked').forEach(cb => addTag(cb.value + '+ Stars', cb));
      document.querySelectorAll('.swatch.active').forEach(s => {
        const tag = document.createElement('div');
        tag.className = 'filter-tag';
        tag.innerHTML = s.title + ' <button>✕</button>';
        tag.querySelector('button').onclick = () => { s.classList.remove('active'); applyFilters(); };
        wrap.appendChild(tag);
      });
      const price = parseInt(document.getElementById('priceRange').value);
      if (price < 5000) {
        const tag = document.createElement('div');
        tag.className = 'filter-tag';
        tag.innerHTML = 'Under ₹' + price.toLocaleString('en-IN') + ' <button>✕</button>';
        tag.querySelector('button').onclick = () => { document.getElementById('priceRange').value = 5000; updatePrice(5000); };
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

    function toggleGroup(el) {
      el.classList.toggle('open');
      const next = el.nextElementSibling;
      next.style.display = el.classList.contains('open') ? 'flex' : 'none';
    }

    function toggleSwatch(el) { el.classList.toggle('active'); applyFilters(); }

    function updatePrice(val) {
      document.getElementById('priceVal').textContent = '₹' + parseInt(val).toLocaleString('en-IN');
      applyFilters();
    }

    function resetFilters() {
      document.querySelectorAll('.filter-options input').forEach(cb => cb.checked = false);
      document.querySelectorAll('.swatch').forEach(s => s.classList.remove('active'));
      document.getElementById('priceRange').value = 5000;
      document.getElementById('priceVal').textContent = '₹5,000';
      activeDiscount = 'all';
      document.querySelectorAll('.disc-pill').forEach((p,i) => p.classList.toggle('active', i===0));
      applyFilters();
      if (window.innerWidth <= 768) closeFilterDrawer();
    }

    // FILTER DRAWER (mobile)
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

    // SORT
    document.getElementById('sortSelect').addEventListener('change', function () {
      const visible = allCards.filter(c => c.style.display !== 'none');
      if (this.value === 'low')      visible.sort((a,b) => +a.dataset.price - +b.dataset.price);
      if (this.value === 'high')     visible.sort((a,b) => +b.dataset.price - +a.dataset.price);
      if (this.value === 'discount') visible.sort((a,b) => +b.dataset.discount - +a.dataset.discount);
      if (this.value === 'rating')   visible.sort((a,b) => +b.dataset.rating - +a.dataset.rating);
      visible.forEach(c => grid.appendChild(c));
    });

    // VIEW TOGGLE
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

    // PAGINATION
    document.querySelectorAll('.pagination button:not(.prev-next)').forEach(btn => {
      btn.addEventListener('click', function () {
        document.querySelectorAll('.pagination button').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });

    applyFilters();