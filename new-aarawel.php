<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bras — LUXORA</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <style>

    /* PAGE BANNER */
    .page-banner {
      background: var(--cream);
      padding: 70px 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #e8e0d5;
    }

    .page-banner h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2rem, 4vw, 3rem);
    }

    .page-banner h1 span {
      color: var(--accent);
      font-style: italic;
    }

    .breadcrumb {
      font-size: 0.8rem;
      color: var(--gray);
      letter-spacing: 0.05em;
    }

    .breadcrumb a { color: var(--gray); text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: var(--accent); }
    .breadcrumb span { margin: 0 8px; }

    /* TOOLBAR */
    .products-toolbar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 18px 5%;
      background: #fff;
      border-bottom: 1px solid #eee;
      flex-wrap: wrap;
      gap: 12px;
    }

    .toolbar-left { font-size: 0.85rem; color: var(--gray); }
    .toolbar-left strong { color: var(--black); }

    .toolbar-right {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .sort-select {
      padding: 8px 16px;
      border: 1px solid #ddd;
      font-family: 'Inter', sans-serif;
      font-size: 0.82rem;
      color: var(--black);
      outline: none;
      cursor: pointer;
      background: #fff;
    }

    .sort-select:focus { border-color: var(--accent); }

    .view-toggle button {
      background: none;
      border: 1px solid #ddd;
      width: 34px;
      height: 34px;
      cursor: pointer;
      font-size: 0.85rem;
      color: var(--gray);
      transition: all 0.2s;
    }

    .view-toggle button.active,
    .view-toggle button:hover {
      background: var(--black);
      color: #fff;
      border-color: var(--black);
    }

    /* CATEGORY TABS */
    .cat-tabs {
      display: flex;
      gap: 0;
      padding: 0 5%;
      background: #fff;
      border-bottom: 1px solid #eee;
      overflow-x: auto;
      scrollbar-width: none;
    }

    .cat-tabs::-webkit-scrollbar { display: none; }

    .cat-tab {
      padding: 14px 22px;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--gray);
      cursor: pointer;
      border-bottom: 2px solid transparent;
      white-space: nowrap;
      transition: color 0.2s, border-color 0.2s;
      background: none;
      border-top: none;
      border-left: none;
      border-right: none;
      font-family: 'Inter', sans-serif;
    }

    .cat-tab:hover { color: var(--black); }
    .cat-tab.active { color: var(--black); border-bottom-color: var(--accent); }

    /* PRODUCTS SECTION */
    .products-section {
      padding: 50px 5%;
      background: var(--cream);
      min-height: 60vh;
    }

    /* GRID */
    .cat-products-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 24px;
    }

    /* PRODUCT CARD — no price version */
    .cat-products-grid .product-card {
      background: var(--white);
      transition: box-shadow 0.3s, transform 0.3s;
      cursor: pointer;
    }

    .cat-products-grid .product-card:hover {
      box-shadow: 0 15px 40px rgba(0,0,0,0.1);
      transform: translateY(-4px);
    }

    .cat-products-grid .product-img-wrap {
      position: relative;
      overflow: hidden;
      height: 300px;
    }

    .cat-products-grid .product-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.5s;
    }

    .cat-products-grid .product-card:hover .product-img-wrap img {
      transform: scale(1.06);
    }

    .cat-products-grid .product-info {
      padding: 16px;
    }

    .cat-products-grid .product-brand {
      font-size: 0.65rem;
      letter-spacing: 0.2em;
      color: var(--accent);
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 4px;
    }

    .cat-products-grid .product-info h4 {
      font-size: 0.92rem;
      font-weight: 500;
      color: var(--black);
      margin-bottom: 8px;
    }

    .cat-products-grid .product-info p {
      font-size: 0.78rem;
      color: var(--gray);
      line-height: 1.5;
      margin-bottom: 14px;
    }

    .cat-products-grid .shop-link {
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--black);
      text-decoration: none;
      border-bottom: 1px solid var(--black);
      padding-bottom: 2px;
      transition: color 0.2s, border-color 0.2s;
      display: inline-block;
    }

    .cat-products-grid .shop-link:hover {
      color: var(--accent);
      border-color: var(--accent);
    }

    /* LIST VIEW */
    .cat-products-grid.list-view {
      grid-template-columns: 1fr;
    }

    .cat-products-grid.list-view .product-card {
      display: flex;
      flex-direction: row;
    }

    .cat-products-grid.list-view .product-img-wrap {
      width: 240px;
      flex-shrink: 0;
      height: 260px;
    }

    .cat-products-grid.list-view .product-info {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 32px;
    }

    .cat-products-grid.list-view .product-info h4 {
      font-size: 1.15rem;
      margin-bottom: 10px;
    }

    .cat-products-grid.list-view .product-info p {
      display: block;
      max-width: 500px;
    }

    /* PAGINATION */
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 6px;
      margin-top: 50px;
    }

    .pagination button {
      width: 38px;
      height: 38px;
      border: 1px solid #ddd;
      background: #fff;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      cursor: pointer;
      transition: all 0.2s;
      color: var(--black);
    }

    .pagination button:hover,
    .pagination button.active {
      background: var(--black);
      color: #fff;
      border-color: var(--black);
    }

    .pagination button.prev-next {
      width: auto;
      padding: 0 16px;
      font-size: 0.78rem;
      letter-spacing: 0.08em;
    }

    /* RESPONSIVE */
    @media (max-width: 1200px) {
      .cat-products-grid { grid-template-columns: repeat(3, 1fr); }
    }

    @media (max-width: 768px) {
      .cat-products-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .page-banner { flex-direction: column; align-items: flex-start; gap: 10px; }
      .cat-products-grid.list-view .product-card { flex-direction: column; }
      .cat-products-grid.list-view .product-img-wrap { width: 100%; height: 240px; }
    }

    @media (max-width: 480px) {
      .cat-products-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
    }

  </style>
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- PAGE BANNER -->
  <div class="page-banner">
    <div>
      <p class="hero-sub" style="margin-bottom:8px">LUXORA Collection</p>
      <h1>New <span>Aariwel</span></h1>
    </div>
    <div class="breadcrumb">
      <a href="index.php">Home</a>
      <span>/</span>
      <a href="#">Shop</a>
      <span>/</span>
      Bras
    </div>
  </div>

  <!-- MARQUEE -->
  <div class="marquee-wrap">
    <div class="marquee-track">
      <span>PREMIUM QUALITY</span><span>★</span>
      <span>FREE SHIPPING ABOVE ₹999</span><span>★</span>
      <span>USE CODE LUXORA10</span><span>★</span>
      <span>EASY RETURNS</span><span>★</span>
      <span>PREMIUM QUALITY</span><span>★</span>
      <span>FREE SHIPPING ABOVE ₹999</span><span>★</span>
      <span>USE CODE LUXORA10</span><span>★</span>
      <span>EASY RETURNS</span><span>★</span>
    </div>
  </div>

  <!-- CATEGORY TABS -->
  <div class="cat-tabs">
    <button class="cat-tab active" onclick="filterCat(this, 'all')">All</button>
    <button class="cat-tab" onclick="filterCat(this, 'padded')">Padded</button>
    <button class="cat-tab" onclick="filterCat(this, 'non-padded')">Non-Padded</button>
    <button class="cat-tab" onclick="filterCat(this, 'sports')">Sports</button>
    <button class="cat-tab" onclick="filterCat(this, 'wireless')">Wireless</button>
    <button class="cat-tab" onclick="filterCat(this, 't-shirt')">T-Shirt</button>
  </div>

  <!-- TOOLBAR -->
  <div class="products-toolbar">
    <div class="toolbar-left">Showing <strong id="visibleCount">12</strong> of <strong>12</strong> products</div>
    <div class="toolbar-right">
      <select class="sort-select" id="sortSelect">
        <option>Sort by: Latest</option>
        <option>Name: A to Z</option>
        <option>Name: Z to A</option>
        <option>Top Rated</option>
      </select>
      <div class="view-toggle">
        <button class="active" id="gridBtn" title="Grid View"><i class="fas fa-th"></i></button>
        <button id="listBtn" title="List View"><i class="fas fa-list"></i></button>
      </div>
    </div>
  </div>

  <!-- PRODUCTS -->
  <section class="products-section">
    <div class="cat-products-grid" id="productsGrid">

      <div class="product-card" data-cat="padded">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500&q=80" alt="Lace Push-Up Bra" />
          <span class="badge">New</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Lace Push-Up Bra</h4>
          <p>Delicate lace detailing with comfortable push-up padding for everyday elegance.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="padded">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=500&q=80" alt="Satin Padded Bra" />
          <span class="badge sale">Sale</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Satin Padded Bra</h4>
          <p>Smooth satin finish with light padding for a seamless look under clothing.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="non-padded">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=500&q=80" alt="Sheer Lace Bra" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Sheer Lace Bra</h4>
          <p>Lightweight sheer lace design with underwire support, no padding.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="sports">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=500&q=80" alt="Active Sports Bra" />
          <span class="badge">Hot</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Active Sports Bra</h4>
          <p>High-impact support with moisture-wicking fabric for all your workouts.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="sports">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=500&q=80" alt="Yoga Sports Bra" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Yoga Sports Bra</h4>
          <p>Soft, stretchy fabric perfect for yoga, pilates and low-impact workouts.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="wireless">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=500&q=80" alt="Comfort Wireless Bra" />
          <span class="badge">New</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Comfort Wireless Bra</h4>
          <p>All-day comfort with no underwire — soft cups and breathable fabric.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="wireless">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=500&q=80" alt="Bralette Wireless" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Bralette Wireless</h4>
          <p>Trendy bralette with delicate straps — perfect for layering or lounging.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="t-shirt">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=500&q=80" alt="T-Shirt Bra" />
          <span class="badge">Hot</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Seamless T-Shirt Bra</h4>
          <p>Ultra-smooth seamless cups for an invisible look under fitted tops.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="t-shirt">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?w=500&q=80" alt="Microfibre T-Shirt Bra" />
          <span class="badge sale">Sale</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Microfibre T-Shirt Bra</h4>
          <p>Feather-light microfibre with full coverage and a smooth silhouette.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="non-padded">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=500&q=80" alt="Minimalist Non-Padded Bra" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Minimalist Non-Padded</h4>
          <p>Clean, minimal design with firm underwire support and no padding.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="padded">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=500&q=80" alt="Floral Padded Bra" />
          <span class="badge">New</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Floral Padded Bra</h4>
          <p>Beautiful floral embroidery on soft mesh with lightly padded cups.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

      <div class="product-card" data-cat="wireless">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=500&q=80" alt="Lounge Wireless Bra" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Lounge Wireless Bra</h4>
          <p>Super-soft lounge bra for relaxed days at home or casual outings.</p>
          <a href="product.php" class="shop-link">Shop Now →</a>
        </div>
      </div>

    </div>

    <!-- PAGINATION -->
    <div class="pagination">
      <button class="prev-next">← Prev</button>
      <button class="active">1</button>
      <button>2</button>
      <button>3</button>
      <button class="prev-next">Next →</button>
    </div>
  </section>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="script.js"></script>
  <script>
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
  </script>

</body>
</html>
