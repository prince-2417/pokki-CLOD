<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Products — LUXORA</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <style>

    /* PAGE BANNER */
    .page-banner {
      background: var(--cream);
      padding: 60px 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid #e8e0d5;
    }
    .page-banner h1 { font-family: 'Playfair Display', serif; font-size: clamp(2rem, 4vw, 3rem); }
    .page-banner h1 span { color: var(--accent); font-style: italic; }
    .breadcrumb { font-size: 0.8rem; color: var(--gray); letter-spacing: 0.05em; }
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
      cursor: pointer;
      font-size: 0.85rem;
      color: var(--gray);
      transition: all 0.2s;
    }
    .view-toggle button.active,
    .view-toggle button:hover { background: var(--black); color: #fff; border-color: var(--black); }

    /* LAYOUT */
    .shop-layout {
      display: flex;
      padding: 40px 5%;
      gap: 40px;
      background: var(--cream);
      min-height: 80vh;
    }

    /* ===== SIDEBAR FILTERS ===== */
    .filter-sidebar {
      width: 240px;
      flex-shrink: 0;
    }

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

    .filter-group {
      border-bottom: 1px solid #e0d9d0;
      padding-bottom: 20px;
      margin-bottom: 20px;
    }
    .filter-group:last-child { border-bottom: none; }

    .filter-title {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--black);
      margin-bottom: 14px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: pointer;
      user-select: none;
    }
    .filter-title i { font-size: 10px; color: var(--gray); transition: transform 0.3s; }
    .filter-title.open i { transform: rotate(180deg); }

    .filter-options { display: flex; flex-direction: column; gap: 10px; }
    .filter-options label {
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 0.84rem;
      color: #444;
      cursor: pointer;
      transition: color 0.2s;
    }
    .filter-options label:hover { color: var(--accent); }
    .filter-options input[type="checkbox"] { accent-color: var(--accent); width: 15px; height: 15px; cursor: pointer; }
    .filter-options .count { margin-left: auto; font-size: 0.75rem; color: var(--gray); }

    /* COLOR SWATCHES */
    .color-swatches { display: flex; flex-wrap: wrap; gap: 10px; }
    .swatch {
      width: 28px; height: 28px;
      border-radius: 50%;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border-color 0.2s, transform 0.2s;
    }
    .swatch:hover, .swatch.active { border-color: var(--accent); transform: scale(1.15); }

    /* PRICE RANGE */
    .price-range { display: flex; flex-direction: column; gap: 10px; }
    .price-range input[type="range"] { accent-color: var(--accent); width: 100%; cursor: pointer; }
    .price-labels { display: flex; justify-content: space-between; font-size: 0.82rem; color: var(--gray); }

    /* RESET BTN */
    .reset-filters {
      width: 100%;
      padding: 10px;
      background: none;
      border: 1.5px solid var(--black);
      font-family: 'Inter', sans-serif;
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      cursor: pointer;
      transition: all 0.2s;
      margin-top: 10px;
    }
    .reset-filters:hover { background: var(--black); color: #fff; }

    /* ===== PRODUCTS AREA ===== */
    .products-area { flex: 1; }

    /* ACTIVE FILTER TAGS */
    .active-filters {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin-bottom: 20px;
      min-height: 28px;
    }
    .filter-tag {
      display: flex;
      align-items: center;
      gap: 6px;
      background: var(--black);
      color: #fff;
      padding: 5px 12px;
      font-size: 0.72rem;
      letter-spacing: 0.05em;
    }
    .filter-tag button {
      background: none; border: none; color: #aaa;
      cursor: pointer; font-size: 0.75rem; padding: 0; line-height: 1; transition: color 0.2s;
    }
    .filter-tag button:hover { color: #fff; }

    /* PRODUCTS GRID */
    .products-grid-main {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 22px;
    }

    /* LIST VIEW */
    .products-grid-main.list-view { grid-template-columns: 1fr; }
    .products-grid-main.list-view .product-card { display: flex; flex-direction: row; }
    .products-grid-main.list-view .product-img-wrap { width: 220px; flex-shrink: 0; height: 250px; }
    .products-grid-main.list-view .product-info { display: flex; flex-direction: column; justify-content: center; padding: 28px; }
    .products-grid-main.list-view .product-info h4 { font-size: 1.1rem; margin-bottom: 8px; }
    .products-grid-main.list-view .prod-desc { display: block !important; }

    .prod-desc {
      display: none;
      font-size: 0.8rem;
      color: var(--gray);
      line-height: 1.6;
      margin-bottom: 12px;
    }

    /* NO RESULTS */
    .no-results {
      grid-column: 1/-1;
      text-align: center;
      padding: 60px 20px;
      color: var(--gray);
    }
    .no-results i { font-size: 2.5rem; color: #ddd; margin-bottom: 14px; display: block; }
    .no-results p { font-size: 0.9rem; }

    /* PAGINATION */
    .pagination {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 6px;
      margin-top: 50px;
    }
    .pagination button {
      width: 38px; height: 38px;
      border: 1px solid #ddd;
      background: #fff;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      cursor: pointer;
      transition: all 0.2s;
      color: var(--black);
    }
    .pagination button:hover,
    .pagination button.active { background: var(--black); color: #fff; border-color: var(--black); }
    .pagination button.prev-next { width: auto; padding: 0 16px; font-size: 0.78rem; letter-spacing: 0.08em; }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      .products-grid-main { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 768px) {
      .shop-layout { flex-direction: column; padding: 24px 4%; }
      .filter-sidebar { width: 100%; }
      .products-grid-main { grid-template-columns: repeat(2, 1fr); gap: 14px; }
      .page-banner { flex-direction: column; align-items: flex-start; gap: 10px; }
      .products-grid-main.list-view .product-card { flex-direction: column; }
      .products-grid-main.list-view .product-img-wrap { width: 100%; height: 240px; }
    }
    @media (max-width: 480px) {
      .products-grid-main { grid-template-columns: 1fr 1fr; gap: 10px; }
    }
  </style>
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- PAGE BANNER -->
  <div class="page-banner">
    <div>
      <p class="hero-sub" style="margin-bottom:8px">2025 Collection</p>
      <h1>All <span>Products</span></h1>
    </div>
    <div class="breadcrumb">
      <a href="index.php">Home</a><span>/</span>
      All Products
    </div>
  </div>

  <!-- MARQUEE -->
  <div class="marquee-wrap">
    <div class="marquee-track">
      <span>FREE SHIPPING ABOVE ₹999</span><span>★</span>
      <span>USE CODE LUXORA10</span><span>★</span>
      <span>NEW ARRIVALS</span><span>★</span>
      <span>EASY RETURNS</span><span>★</span>
      <span>FREE SHIPPING ABOVE ₹999</span><span>★</span>
      <span>USE CODE LUXORA10</span><span>★</span>
      <span>NEW ARRIVALS</span><span>★</span>
      <span>EASY RETURNS</span><span>★</span>
    </div>
  </div>

  <!-- TOOLBAR -->
  <div class="products-toolbar">
    <div class="toolbar-left">Showing <strong id="visibleCount">0</strong> of <strong id="totalCount">0</strong> products</div>
    <div class="toolbar-right">
      <select class="sort-select" id="sortSelect">
        <option value="latest">Sort by: Latest</option>
        <option value="low">Price: Low to High</option>
        <option value="high">Price: High to Low</option>
        <option value="rating">Top Rated</option>
        <option value="az">Name: A to Z</option>
      </select>
      <div class="view-toggle">
        <button class="active" id="gridBtn" title="Grid View"><i class="fas fa-th"></i></button>
        <button id="listBtn" title="List View"><i class="fas fa-list"></i></button>
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
          <label><input type="checkbox" value="panties" onchange="applyFilters()" /> Panties <span class="count">4</span></label>
          <label><input type="checkbox" value="nightwear" onchange="applyFilters()" /> Nightwear <span class="count">4</span></label>
          <label><input type="checkbox" value="accessories" onchange="applyFilters()" /> Accessories <span class="count">3</span></label>
          <label><input type="checkbox" value="sale" onchange="applyFilters()" /> Sale Items <span class="count">4</span></label>
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
        <div class="color-swatches" id="colorFilters">
          <div class="swatch" style="background:#111" data-color="black" title="Black" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#fff;border-color:#ddd" data-color="white" title="White" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#c9a96e" data-color="gold" title="Gold" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#d56d90" data-color="pink" title="Pink" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#6b8cba" data-color="blue" title="Blue" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#e74c3c" data-color="red" title="Red" onclick="toggleSwatch(this)"></div>
          <div class="swatch" style="background:#9b59b6" data-color="purple" title="Purple" onclick="toggleSwatch(this)"></div>
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
          <label><input type="checkbox" value="5" onchange="applyFilters()" /> ★★★★★ &nbsp;5 Stars</label>
          <label><input type="checkbox" value="4" onchange="applyFilters()" /> ★★★★☆ &nbsp;4+ Stars</label>
          <label><input type="checkbox" value="3" onchange="applyFilters()" /> ★★★☆☆ &nbsp;3+ Stars</label>
        </div>
      </div>

      <button class="reset-filters" onclick="resetFilters()">Reset All Filters</button>
    </aside>

    <!-- PRODUCTS AREA -->
    <div class="products-area">

      <!-- ACTIVE TAGS -->
      <div class="active-filters" id="activeTags"></div>

      <!-- GRID -->
      <div class="products-grid-main" id="productsGrid">

        <div class="product-card" data-cat="bras" data-size="s m l" data-price="1199" data-rating="5" data-color="black">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&q=80" alt="Lace Push-Up Bra" />
            <span class="badge">New</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Lace Push-Up Bra</h4>
            <p class="prod-desc">Delicate lace detailing with comfortable push-up padding for everyday elegance.</p>
            <div class="product-price"><span class="price">₹1,199</span><span class="old-price">₹1,699</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="nightwear" data-size="m l xl" data-price="1499" data-rating="4" data-color="pink">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=400&q=80" alt="Satin Night Gown" />
            <span class="badge sale">Sale</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Satin Night Gown</h4>
            <p class="prod-desc">Silky satin fabric for a luxurious night's sleep. Available in 6 colors.</p>
            <div class="product-price"><span class="price">₹1,499</span><span class="old-price">₹2,299</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="accessories" data-size="s m l" data-price="1499" data-rating="4" data-color="gold">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=400&q=80" alt="Boho Summer Dress" />
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Boho Summer Dress</h4>
            <p class="prod-desc">Flowy boho-inspired summer dress perfect for beach days and casual outings.</p>
            <div class="product-price"><span class="price">₹1,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="accessories" data-size="xs s m" data-price="2199" data-rating="5" data-color="white">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=400&q=80" alt="Linen Co-ord Set" />
            <span class="badge">Hot</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Linen Co-ord Set</h4>
            <p class="prod-desc">Breathable linen co-ord set, effortlessly stylish for summer.</p>
            <div class="product-price"><span class="price">₹2,199</span><span class="old-price">₹2,999</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="panties" data-size="s m l xl" data-price="599" data-rating="4" data-color="pink">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=400&q=80" alt="Lace Bikini Panty" />
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Lace Bikini Panty</h4>
            <p class="prod-desc">Soft lace bikini panty with a comfortable fit for everyday wear.</p>
            <div class="product-price"><span class="price">₹599</span><span class="old-price">₹899</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="sale" data-size="m l xl xxl" data-price="2299" data-rating="4" data-color="blue">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=400&q=80" alt="Denim Jacket" />
            <span class="badge sale">Sale</span>
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

        <div class="product-card" data-cat="bras" data-size="s m" data-price="999" data-rating="5" data-color="black">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?w=400&q=80" alt="Sports Bra" />
            <span class="badge">New</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Active Sports Bra</h4>
            <p class="prod-desc">High-support sports bra with moisture-wicking fabric for workouts.</p>
            <div class="product-price"><span class="price">₹999</span><span class="old-price">₹1,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="accessories" data-size="xs s m l xl xxl" data-price="799" data-rating="5" data-color="gold">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=400&q=80" alt="Pearl Necklace Set" />
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Pearl Necklace Set</h4>
            <p class="prod-desc">Timeless pearl necklace set — perfect for gifting or everyday wear.</p>
            <div class="product-price"><span class="price">₹799</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="nightwear" data-size="xs s m" data-price="1899" data-rating="4" data-color="black">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="Evening Slip Dress" />
            <span class="badge">New</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Evening Slip Dress</h4>
            <p class="prod-desc">A sleek satin slip dress that transitions from day to evening effortlessly.</p>
            <div class="product-price"><span class="price">₹1,899</span><span class="old-price">₹2,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="panties" data-size="s m l xl" data-price="499" data-rating="3" data-color="white">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&q=80" alt="Cotton Hipster" />
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

        <div class="product-card" data-cat="sale" data-size="s m l xl" data-price="3199" data-rating="4" data-color="white">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&q=80" alt="Sporty Sneakers" />
            <span class="badge sale">Sale</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Sporty Sneakers</h4>
            <p class="prod-desc">Lightweight sporty sneakers with cushioned sole for all-day comfort.</p>
            <div class="product-price"><span class="price">₹3,199</span><span class="old-price">₹4,499</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="bras" data-size="s m l" data-price="1399" data-rating="5" data-color="pink">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="T-Shirt Bra" />
            <span class="badge">Hot</span>
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

        <div class="product-card" data-cat="nightwear" data-size="m l xl" data-price="2199" data-rating="5" data-color="purple">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=400&q=80" alt="Silk Robe" />
            <span class="badge">New</span>
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

        <div class="product-card" data-cat="panties" data-size="s m l" data-price="699" data-rating="4" data-color="black">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=400&q=80" alt="High Waist Panty" />
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

        <div class="product-card" data-cat="sale" data-size="xs s m" data-price="1299" data-rating="4" data-color="red">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=400&q=80" alt="Floral Wrap Dress" />
            <span class="badge sale">Sale</span>
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Floral Wrap Dress</h4>
            <p class="prod-desc">Feminine floral wrap dress perfect for brunches and casual days out.</p>
            <div class="product-price"><span class="price">₹1,299</span><span class="old-price">₹1,899</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

        <div class="product-card" data-cat="bras" data-size="m l xl" data-price="1599" data-rating="5" data-color="red">
          <div class="product-img-wrap">
            <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=400&q=80" alt="Wireless Comfort Bra" />
            <div class="product-actions">
              <button><i class="fas fa-heart"></i></button>
              <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
            </div>
          </div>
          <div class="product-info">
            <p class="product-brand">LUXORA</p>
            <h4>Wireless Comfort Bra</h4>
            <p class="prod-desc">All-day comfort with soft cups and no underwire for a relaxed fit.</p>
            <div class="product-price"><span class="price">₹1,599</span><span class="old-price">₹2,199</span></div>
            <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
          </div>
        </div>

      </div>

      <!-- NO RESULTS -->
      <div class="no-results" id="noResults" style="display:none">
        <i class="fas fa-box-open"></i>
        <p>No products match your selected filters.<br>Try resetting the filters.</p>
      </div>

      <!-- PAGINATION -->
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

    // ── APPLY FILTERS ──
    function applyFilters() {
      const cats    = getChecked('catFilters');
      const sizes   = getChecked('sizeFilters');
      const ratings = getChecked('ratingFilters');
      const maxPrice = parseInt(document.getElementById('priceRange').value);
      const colors  = Array.from(document.querySelectorAll('.swatch.active')).map(s => s.dataset.color);

      let visible = 0;
      allCards.forEach(card => {
        const cardSizes = card.dataset.size.split(' ');
        const ok =
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
      if (this.value === 'low')    visible.sort((a, b) => +a.dataset.price - +b.dataset.price);
      if (this.value === 'high')   visible.sort((a, b) => +b.dataset.price - +a.dataset.price);
      if (this.value === 'rating') visible.sort((a, b) => +b.dataset.rating - +a.dataset.rating);
      if (this.value === 'az')     visible.sort((a, b) => a.querySelector('h4').textContent.localeCompare(b.querySelector('h4').textContent));
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
    }

    // ── PAGINATION ──
    document.querySelectorAll('.pagination button:not(.prev-next)').forEach(btn => {
      btn.addEventListener('click', function () {
        document.querySelectorAll('.pagination button').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });

    // ── INIT ──
    applyFilters();
  </script>

</body>
</html>
