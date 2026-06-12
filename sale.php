<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sale — LUXORA</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <style>

    /* SALE HERO */
    .sale-hero {
      background: linear-gradient(135deg, #1a1a1a 0%, #3d2b1a 100%);
      padding: 80px 5%;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .sale-hero::before {
      content: 'SALE';
      position: absolute;
      font-size: 22rem;
      font-weight: 900;
      color: rgba(255,255,255,0.03);
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      font-family: 'Playfair Display', serif;
      white-space: nowrap;
      pointer-events: none;
    }

    .sale-hero-content { position: relative; z-index: 1; }

    .sale-hero-content p.sub {
      font-size: 0.75rem;
      letter-spacing: 0.35em;
      text-transform: uppercase;
      color: var(--accent);
      font-weight: 700;
      margin-bottom: 14px;
    }

    .sale-hero-content h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.5rem, 6vw, 5rem);
      color: #fff;
      line-height: 1.1;
      margin-bottom: 10px;
    }

    .sale-hero-content h1 span { color: var(--accent); font-style: italic; }

    .sale-hero-content p.desc {
      color: rgba(255,255,255,0.6);
      font-size: 0.9rem;
      margin-bottom: 36px;
      letter-spacing: 0.05em;
    }

    /* COUNTDOWN */
    .countdown {
      display: flex;
      justify-content: center;
      gap: 16px;
      margin-bottom: 36px;
      flex-wrap: wrap;
    }

    .count-box {
      background: rgba(255,255,255,0.07);
      border: 1px solid rgba(255,255,255,0.1);
      padding: 16px 22px;
      min-width: 80px;
      text-align: center;
    }

    .count-box span {
      display: block;
      font-family: 'Playfair Display', serif;
      font-size: 2.2rem;
      font-weight: 700;
      color: var(--accent);
      line-height: 1;
    }

    .count-box p {
      font-size: 0.62rem;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: rgba(255,255,255,0.5);
      margin-top: 6px;
    }

    .count-sep {
      font-size: 2rem;
      color: var(--accent);
      align-self: center;
      font-weight: 700;
      line-height: 1;
    }

    /* DISCOUNT PILLS */
    .discount-pills {
      display: flex;
      justify-content: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    .disc-pill {
      background: var(--accent);
      color: #fff;
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      padding: 6px 18px;
      cursor: pointer;
      transition: background 0.2s, transform 0.2s;
    }

    .disc-pill:hover, .disc-pill.active {
      background: #fff;
      color: var(--black);
      transform: translateY(-2px);
    }

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
    .toolbar-right { display: flex; align-items: center; gap: 14px; }

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
      width: 34px; height: 34px;
      cursor: pointer; font-size: 0.85rem;
      color: var(--gray); transition: all 0.2s;
    }
    .view-toggle button.active,
    .view-toggle button:hover { background: var(--black); color: #fff; border-color: var(--black); }

    /* LAYOUT */
    .shop-layout {
      display: flex;
      padding: 40px 5%;
      gap: 40px;
      background: var(--cream);
      min-height: 70vh;
    }

    /* SIDEBAR */
    .filter-sidebar { width: 230px; flex-shrink: 0; }

    .sidebar-heading {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.2em;
      text-transform: uppercase;
      color: var(--black);
      margin-bottom: 20px;
      padding-bottom: 12px;
      border-bottom: 2px solid var(--accent);
    }

    .filter-group { border-bottom: 1px solid #e0d9d0; padding-bottom: 20px; margin-bottom: 20px; }
    .filter-group:last-child { border-bottom: none; }

    .filter-title {
      font-size: 0.72rem; font-weight: 700;
      letter-spacing: 0.15em; text-transform: uppercase;
      color: var(--black); margin-bottom: 14px;
      display: flex; justify-content: space-between;
      align-items: center; cursor: pointer; user-select: none;
    }
    .filter-title i { font-size: 10px; color: var(--gray); transition: transform 0.3s; }
    .filter-title.open i { transform: rotate(180deg); }

    .filter-options { display: flex; flex-direction: column; gap: 10px; }
    .filter-options label {
      display: flex; align-items: center; gap: 10px;
      font-size: 0.84rem; color: #444; cursor: pointer; transition: color 0.2s;
    }
    .filter-options label:hover { color: var(--accent); }
    .filter-options input[type="checkbox"] { accent-color: var(--accent); width: 15px; height: 15px; cursor: pointer; }
    .filter-options .count { margin-left: auto; font-size: 0.75rem; color: var(--gray); }

    .color-swatches { display: flex; flex-wrap: wrap; gap: 10px; }
    .swatch {
      width: 28px; height: 28px; border-radius: 50%; cursor: pointer;
      border: 2px solid transparent; transition: border-color 0.2s, transform 0.2s;
    }
    .swatch:hover, .swatch.active { border-color: var(--accent); transform: scale(1.15); }

    .price-range { display: flex; flex-direction: column; gap: 10px; }
    .price-range input[type="range"] { accent-color: var(--accent); width: 100%; cursor: pointer; }
    .price-labels { display: flex; justify-content: space-between; font-size: 0.82rem; color: var(--gray); }

    .reset-filters {
      width: 100%; padding: 10px;
      background: none; border: 1.5px solid var(--black);
      font-family: 'Inter', sans-serif; font-size: 0.78rem;
      font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase;
      cursor: pointer; transition: all 0.2s; margin-top: 10px;
    }
    .reset-filters:hover { background: var(--black); color: #fff; }

    /* PRODUCTS AREA */
    .products-area { flex: 1; }

    .active-filters { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 20px; min-height: 28px; }
    .filter-tag {
      display: flex; align-items: center; gap: 6px;
      background: var(--black); color: #fff;
      padding: 5px 12px; font-size: 0.72rem; letter-spacing: 0.05em;
    }
    .filter-tag button { background: none; border: none; color: #aaa; cursor: pointer; font-size: 0.75rem; padding: 0; transition: color 0.2s; }
    .filter-tag button:hover { color: #fff; }

    /* SALE BADGE ON CARD */
    .sale-pct {
      position: absolute;
      top: 12px; left: 12px;
      background: var(--red);
      color: #fff;
      font-size: 0.68rem;
      font-weight: 700;
      letter-spacing: 0.05em;
      padding: 4px 10px;
      z-index: 2;
    }

    /* PRODUCTS GRID */
    .sale-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    .sale-grid.list-view { grid-template-columns: 1fr; }
    .sale-grid.list-view .product-card { display: flex; }
    .sale-grid.list-view .product-img-wrap { width: 220px; flex-shrink: 0; height: 250px; }
    .sale-grid.list-view .product-info { display: flex; flex-direction: column; justify-content: center; padding: 28px; }
    .sale-grid.list-view .prod-desc { display: block !important; }

    .prod-desc { display: none; font-size: 0.8rem; color: var(--gray); line-height: 1.6; margin-bottom: 12px; }

    .no-results { grid-column: 1/-1; text-align: center; padding: 60px 20px; color: var(--gray); }
    .no-results i { font-size: 2.5rem; color: #ddd; margin-bottom: 14px; display: block; }

    /* PAGINATION */
    .pagination {
      display: flex; justify-content: center;
      align-items: center; gap: 6px; margin-top: 50px;
    }
    .pagination button {
      width: 38px; height: 38px; border: 1px solid #ddd; background: #fff;
      font-family: 'Inter', sans-serif; font-size: 0.85rem;
      cursor: pointer; transition: all 0.2s; color: var(--black);
    }
    .pagination button:hover,
    .pagination button.active { background: var(--black); color: #fff; border-color: var(--black); }
    .pagination button.prev-next { width: auto; padding: 0 16px; font-size: 0.78rem; letter-spacing: 0.08em; }

    /* RESPONSIVE */
    @media (max-width: 1024px) { .sale-grid { grid-template-columns: repeat(2, 1fr); } }
    @media (max-width: 768px) {
      .shop-layout { flex-direction: column; padding: 24px 4%; }
      .filter-sidebar { width: 100%; }
      .sale-grid { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .sale-grid.list-view .product-card { flex-direction: column; }
      .sale-grid.list-view .product-img-wrap { width: 100%; height: 240px; }
      .sale-hero { padding: 60px 5%; }
    }
    @media (max-width: 480px) {
      .sale-grid { grid-template-columns: 1fr 1fr; gap: 10px; }
      .sale-hero h1 { font-size: 2.4rem; }
      .count-box span { font-size: 1.6rem; }
    }
  </style>
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- SALE HERO -->
  <section class="sale-hero">
    <div class="sale-hero-content">
      <p class="sub">Limited Time Offer</p>
      <h1>Mega <span>Sale</span></h1>
      <p class="desc">Up to 50% off on selected styles — Don't miss out!</p>

      <!-- COUNTDOWN -->
      <div class="countdown">
        <div class="count-box"><span id="cd-days">00</span><p>Days</p></div>
        <div class="count-sep">:</div>
        <div class="count-box"><span id="cd-hours">00</span><p>Hours</p></div>
        <div class="count-sep">:</div>
        <div class="count-box"><span id="cd-mins">00</span><p>Minutes</p></div>
        <div class="count-sep">:</div>
        <div class="count-box"><span id="cd-secs">00</span><p>Seconds</p></div>
      </div>

      <!-- DISCOUNT FILTER PILLS -->
      <div class="discount-pills">
        <div class="disc-pill active" onclick="filterDiscount(this, 'all')">All Deals</div>
        <div class="disc-pill" onclick="filterDiscount(this, '10')">10% Off</div>
        <div class="disc-pill" onclick="filterDiscount(this, '20')">20% Off</div>
        <div class="disc-pill" onclick="filterDiscount(this, '30')">30% Off</div>
        <div class="disc-pill" onclick="filterDiscount(this, '40')">40% Off</div>
        <div class="disc-pill" onclick="filterDiscount(this, '50')">50% Off</div>
      </div>
    </div>
  </section>

  <!-- TOOLBAR -->
  <div class="products-toolbar">
    <div class="toolbar-left">Showing <strong id="visibleCount">0</strong> of <strong id="totalCount">0</strong> sale products</div>
    <div class="toolbar-right">
      <select class="sort-select" id="sortSelect">
        <option value="latest">Sort by: Latest</option>
        <option value="low">Price: Low to High</option>
        <option value="high">Price: High to Low</option>
        <option value="discount">Highest Discount</option>
        <option value="rating">Top Rated</option>
      </select>
      <div class="view-toggle">
        <button class="active" id="gridBtn"><i class="fas fa-th"></i></button>
        <button id="listBtn"><i class="fas fa-list"></i></button>
      </div>
    </div>
  </div>

  <!-- SHOP LAYOUT -->
  <div class="shop-layout">

    <!-- SIDEBAR -->
    <aside class="filter-sidebar">
      <p class="sidebar-heading">Filter By</p>

      <!-- CATEGORY -->
      <div class="filter-group">
        <div class="filter-title open" onclick="toggleGroup(this)">Category <i class="fas fa-chevron-down"></i></div>
        <div class="filter-options" id="catFilters">
          <label><input type="checkbox" value="bras" onchange="applyFilters()" /> Bras <span class="count">5</span></label>
          <label><input type="checkbox" value="panties" onchange="applyFilters()" /> Panties <span class="count">3</span></label>
          <label><input type="checkbox" value="nightwear" onchange="applyFilters()" /> Nightwear <span class="count">4</span></label>
          <label><input type="checkbox" value="accessories" onchange="applyFilters()" /> Accessories <span class="count">3</span></label>
        </div>
      </div>

      <!-- SIZE -->
      <div class="filter-group">
        <div class="filter-title open" onclick="toggleGroup(this)">Size <i class="fas fa-chevron-down"></i></div>
        <div class="filter-options" id="sizeFilters">
          <label><input type="checkbox" value="xs" onchange="applyFilters()" /> XS</label>
          <label><input type="checkbox" value="s" onchange="applyFilters()" /> S</label>
          <label><input type="checkbox" value="m" onchange="applyFilters()" /> M</label>
          <label><input type="checkbox" value="l" onchange="applyFilters()" /> L</label>
          <label><input type="checkbox" value="xl" onchange="applyFilters()" /> XL</label>
          <label><input type="checkbox" value="xxl" onchange="applyFilters()" /> XXL</label>
        </div>
      </div>

      <!-- COLOR -->
      <div class="filter-group">
        <div class="filter-title open" onclick="toggleGroup(this)">Color <i class="fas fa-chevron-down"></i></div>
        <div class="color-swatches">
          <div class="swatch" style="background:#111" data-color="black" title="Black" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#fff;border-color:#ddd" data-color="white" title="White" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#c9a96e" data-color="gold" title="Gold" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#d56d90" data-color="pink" title="Pink" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#6b8cba" data-color="blue" title="Blue" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#e74c3c" data-color="red" title="Red" onclick="toggleSwatch(this)"></div>
        </div>
      </div>

      <!-- PRICE -->
      <div class="filter-group">
        <div class="filter-title open" onclick="toggleGroup(this)">Price Range <i class="fas fa-chevron-down"></i></div>
        <div class="price-range">
          <input type="range" min="0" max="5000" value="5000" id="priceRange" oninput="updatePrice(this.value)" />
          <div class="price-labels"><span>₹0</span><span id="priceVal">₹5,000</span></div>
        </div>
      </div>

      <!-- RATING -->
      <div class="filter-group">
        <div class="filter-title open" onclick="toggleGroup(this)">Rating <i class="fas fa-chevron-down"></i></div>
        <div class="filter-options" id="ratingFilters">
          <label><input type="checkbox" value="5" onchange="applyFilters()" /> ★★★★★ 5 Stars</label>
          <label><input type="checkbox" value="4" onchange="applyFilters()" /> ★★★★☆ 4+ Stars</label>
          <label><input type="checkbox" value="3" onchange="applyFilters()" /> ★★★☆☆ 3+ Stars</label>
        </div>
      </div>

      <button class="reset-filters" onclick="resetFilters()">Reset Filters</button>
    </aside>

    <!-- PRODUCTS -->
    <div class="products-area">
      <div class="active-filters" id="activeTags"></div>

      <div class="sale-grid" id="productsGrid">

        <div class="product-card" data-cat="bras" data-size="s m l" data-price="1199" data-rating="5" data-color="black" data-discount="30">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&q=80" alt="Lace Push-Up Bra" />
            <span class="sale-pct">30% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Lace Push-Up Bra</h4>
            <p class="prod-desc">Delicate lace detailing with comfortable push-up padding.</p>
            <div class="product-price"><span class="price">₹1,199</span><span class="old-price">₹1,699</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="nightwear" data-size="m l xl" data-price="1499" data-rating="4" data-color="pink" data-discount="35">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=400&q=80" alt="Satin Night Gown" />
            <span class="sale-pct">35% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Satin Night Gown</h4>
            <p class="prod-desc">Silky satin fabric for a luxurious night's sleep.</p>
            <div class="product-price"><span class="price">₹1,499</span><span class="old-price">₹2,299</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="accessories" data-size="s m l" data-price="1299" data-rating="4" data-color="red" data-discount="32">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=400&q=80" alt="Floral Wrap Dress" />
            <span class="sale-pct">32% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Floral Wrap Dress</h4>
            <p class="prod-desc">Feminine floral wrap dress perfect for brunches and casual days.</p>
            <div class="product-price"><span class="price">₹1,299</span><span class="old-price">₹1,899</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="accessories" data-size="m l xl xxl" data-price="2299" data-rating="4" data-color="blue" data-discount="20">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=400&q=80" alt="Denim Jacket" />
            <span class="sale-pct">20% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Denim Jacket</h4>
            <p class="prod-desc">Classic denim jacket with a modern cut. A wardrobe staple.</p>
            <div class="product-price"><span class="price">₹2,299</span><span class="old-price">₹2,899</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="bras" data-size="s m" data-price="999" data-rating="5" data-color="black" data-discount="33">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?w=400&q=80" alt="Sports Bra" />
            <span class="sale-pct">33% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Active Sports Bra</h4>
            <p class="prod-desc">High-support sports bra with moisture-wicking fabric.</p>
            <div class="product-price"><span class="price">₹999</span><span class="old-price">₹1,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="accessories" data-size="xs s m l xl xxl" data-price="799" data-rating="5" data-color="gold" data-discount="47">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=400&q=80" alt="Pearl Necklace Set" />
            <span class="sale-pct">47% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Pearl Necklace Set</h4>
            <p class="prod-desc">Timeless pearl necklace set — perfect for gifting or everyday wear.</p>
            <div class="product-price"><span class="price">₹799</span><span class="old-price">₹1,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="nightwear" data-size="xs s m" data-price="1899" data-rating="4" data-color="black" data-discount="24">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="Evening Slip Dress" />
            <span class="sale-pct">24% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Evening Slip Dress</h4>
            <p class="prod-desc">A sleek satin slip dress that transitions from day to evening.</p>
            <div class="product-price"><span class="price">₹1,899</span><span class="old-price">₹2,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="panties" data-size="s m l xl" data-price="499" data-rating="3" data-color="white" data-discount="29">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&q=80" alt="Cotton Hipster" />
            <span class="sale-pct">29% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Cotton Hipster Panty</h4>
            <p class="prod-desc">Super soft 100% cotton hipster panty for all-day comfort.</p>
            <div class="product-price"><span class="price">₹499</span><span class="old-price">₹699</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="bras" data-size="s m l" data-price="1399" data-rating="5" data-color="pink" data-discount="26">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="T-Shirt Bra" />
            <span class="sale-pct">26% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Seamless T-Shirt Bra</h4>
            <p class="prod-desc">Ultra-smooth seamless cups for an invisible look under fitted tops.</p>
            <div class="product-price"><span class="price">₹1,399</span><span class="old-price">₹1,899</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="nightwear" data-size="m l xl" data-price="2199" data-rating="5" data-color="gold" data-discount="27">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&q=80" alt="Silk Robe" />
            <span class="sale-pct">27% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Silk Lounge Robe</h4>
            <p class="prod-desc">Luxurious silk robe with a sash tie, perfect for mornings and evenings.</p>
            <div class="product-price"><span class="price">₹2,199</span><span class="old-price">₹2,999</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="panties" data-size="s m l" data-price="699" data-rating="4" data-color="black" data-discount="30">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=400&q=80" alt="High Waist Shaper" />
            <span class="sale-pct">30% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>High Waist Shaper</h4>
            <p class="prod-desc">Tummy-control high waist panty with smooth, seamless finish.</p>
            <div class="product-price"><span class="price">₹699</span><span class="old-price">₹999</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="bras" data-size="m l xl" data-price="1599" data-rating="5" data-color="red" data-discount="50">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=400&q=80" alt="Wireless Comfort Bra" />
            <span class="sale-pct">50% OFF</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Wireless Comfort Bra</h4>
            <p class="prod-desc">All-day comfort with soft cups and no underwire for a relaxed fit.</p>
            <div class="product-price"><span class="price">₹1,599</span><span class="old-price">₹3,199</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

      </div>

      <div class="no-results" id="noResults" style="display:none">
        <i class="fas fa-box-open"></i>
        <p>No products match your filters. Try resetting.</p>
      </div>

      <div class="pagination" id="pagination">
        <button class="prev-next">← Prev</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button class="prev-next">Next →</button>
      </div>
    </div>
  </div>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="script.js"></script>
  <script>
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
    }

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
  </script>

</body>
</html>
