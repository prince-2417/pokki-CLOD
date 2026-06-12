<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Lace Push-Up Bra — LUXORA</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <style>

    /* BREADCRUMB */
    .breadcrumb-bar {
      padding: 16px 5%;
      background: var(--white);
      border-bottom: 1px solid #eee;
      font-size: 0.78rem;
      color: var(--gray);
      letter-spacing: 0.04em;
    }
    .breadcrumb-bar a { color: var(--gray); text-decoration: none; transition: color 0.2s; }
    .breadcrumb-bar a:hover { color: var(--accent); }
    .breadcrumb-bar span { margin: 0 8px; }

    /* PRODUCT MAIN */
    .product-main {
      display: flex;
      gap: 60px;
      padding: 50px 5%;
      background: var(--white);
    }

    /* LEFT — IMAGE GALLERY */
    .product-gallery {
      flex: 1;
      display: flex;
      gap: 14px;
      max-width: 600px;
    }

    .thumb-col {
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .thumb {
      width: 72px;
      height: 86px;
      object-fit: cover;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border-color 0.2s;
      opacity: 0.65;
      transition: opacity 0.2s, border-color 0.2s;
    }

    .thumb.active,
    .thumb:hover {
      border-color: var(--accent);
      opacity: 1;
    }

    .main-img-wrap {
      position: relative;
      flex: 1;
      overflow: hidden;
      background: var(--cream);
    }

    .main-img-wrap img {
      width: 100%;
      height: 580px;
      object-fit: cover;
      display: block;
      transition: transform 0.4s;
    }

    .main-img-wrap:hover img {
      transform: scale(1.04);
    }

    .img-badge {
      position: absolute;
      top: 16px;
      left: 16px;
      background: var(--red);
      color: #fff;
      font-size: 0.65rem;
      font-weight: 700;
      letter-spacing: 0.1em;
      padding: 5px 12px;
    }

    .img-wishlist {
      position: absolute;
      top: 16px;
      right: 16px;
      background: #fff;
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      font-size: 1rem;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      transition: all 0.2s;
      color: var(--gray);
    }

    .img-wishlist:hover,
    .img-wishlist.active { color: var(--red); transform: scale(1.1); }

    /* RIGHT — PRODUCT INFO */
    .product-details {
      flex: 1;
      max-width: 520px;
      padding-top: 10px;
    }

    .pd-brand {
      font-size: 0.72rem;
      letter-spacing: 0.25em;
      color: var(--accent);
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .pd-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.6rem, 2.5vw, 2.2rem);
      line-height: 1.2;
      margin-bottom: 14px;
    }

    /* RATING */
    .pd-rating {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .pd-rating .stars { color: var(--accent); font-size: 0.95rem; }
    .pd-rating span { font-size: 0.8rem; color: var(--gray); }
    .pd-rating a { font-size: 0.8rem; color: var(--accent); text-decoration: none; }

    /* PRICE */
    .pd-price {
      display: flex;
      align-items: center;
      gap: 14px;
      margin-bottom: 6px;
    }

    .pd-price .price {
      font-size: 1.7rem;
      font-weight: 700;
      font-family: 'Playfair Display', serif;
    }

    .pd-price .old-price {
      font-size: 1rem;
      color: var(--gray);
      text-decoration: line-through;
    }

    .pd-price .discount-tag {
      background: var(--red);
      color: #fff;
      font-size: 0.7rem;
      font-weight: 700;
      padding: 3px 8px;
      letter-spacing: 0.05em;
    }

    .pd-tax { font-size: 0.75rem; color: var(--gray); margin-bottom: 24px; }

    .pd-divider { border: none; border-top: 1px solid #eee; margin: 20px 0; }

    /* COLOR */
    .pd-label {
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      color: var(--black);
      margin-bottom: 12px;
    }

    .pd-label span { font-weight: 400; color: var(--gray); margin-left: 6px; text-transform: none; letter-spacing: 0; }

    .color-options {
      display: flex;
      gap: 10px;
      margin-bottom: 24px;
    }

    .color-dot {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      cursor: pointer;
      border: 2px solid transparent;
      transition: border-color 0.2s, transform 0.2s;
    }

    .color-dot:hover, .color-dot.active {
      border-color: var(--accent);
      transform: scale(1.15);
    }

    /* SIZE */
    .size-options {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
      margin-bottom: 8px;
    }

    .size-btn {
      min-width: 48px;
      height: 44px;
      padding: 0 14px;
      border: 1.5px solid #ddd;
      background: #fff;
      font-family: 'Inter', sans-serif;
      font-size: 0.82rem;
      font-weight: 500;
      cursor: pointer;
      transition: all 0.2s;
      color: var(--black);
    }

    .size-btn:hover { border-color: var(--black); }
    .size-btn.active { background: var(--black); color: #fff; border-color: var(--black); }
    .size-btn.out { color: #ccc; border-color: #eee; cursor: not-allowed; text-decoration: line-through; }

    .size-guide-link {
      font-size: 0.78rem;
      color: var(--accent);
      text-decoration: underline;
      cursor: pointer;
      margin-bottom: 24px;
      display: inline-block;
    }

    /* QTY + CART */
    .pd-actions {
      display: flex;
      gap: 12px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .qty-wrap {
      display: flex;
      align-items: center;
      border: 1.5px solid #ddd;
      height: 50px;
    }

    .qty-wrap button {
      width: 44px;
      height: 100%;
      background: none;
      border: none;
      font-size: 1.1rem;
      cursor: pointer;
      color: var(--black);
      transition: background 0.2s;
    }

    .qty-wrap button:hover { background: var(--cream); }

    .qty-wrap input {
      width: 48px;
      height: 100%;
      border: none;
      border-left: 1.5px solid #ddd;
      border-right: 1.5px solid #ddd;
      text-align: center;
      font-family: 'Inter', sans-serif;
      font-size: 0.9rem;
      font-weight: 600;
      outline: none;
    }

    .btn-cart {
      flex: 1;
      height: 50px;
      background: var(--black);
      color: #fff;
      border: none;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      cursor: pointer;
      transition: background 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .btn-cart:hover { background: var(--accent); }

    .btn-buy {
      width: 100%;
      height: 50px;
      background: var(--accent);
      color: #fff;
      border: none;
      font-family: 'Inter', sans-serif;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      cursor: pointer;
      transition: background 0.3s;
      margin-bottom: 20px;
    }

    .btn-buy:hover { background: var(--accent-dark); }

    /* DELIVERY INFO */
    .delivery-info {
      display: flex;
      flex-direction: column;
      gap: 12px;
      padding: 18px;
      background: var(--cream);
      margin-bottom: 20px;
    }

    .delivery-row {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.82rem;
      color: #444;
    }

    .delivery-row i { color: var(--accent); font-size: 1rem; width: 18px; }

    /* SHARE */
    .pd-share {
      display: flex;
      align-items: center;
      gap: 12px;
      font-size: 0.78rem;
      color: var(--gray);
    }

    .pd-share a {
      width: 34px;
      height: 34px;
      border: 1px solid #ddd;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--gray);
      text-decoration: none;
      transition: all 0.2s;
    }

    .pd-share a:hover { background: var(--accent); border-color: var(--accent); color: #fff; }

    /* TABS */
    .product-tabs {
      padding: 60px 5%;
      background: var(--white);
      border-top: 1px solid #eee;
    }

    .tab-nav {
      display: flex;
      border-bottom: 2px solid #eee;
      margin-bottom: 36px;
      gap: 0;
    }

    .tab-btn {
      padding: 14px 28px;
      background: none;
      border: none;
      font-family: 'Inter', sans-serif;
      font-size: 0.82rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      cursor: pointer;
      color: var(--gray);
      border-bottom: 2px solid transparent;
      margin-bottom: -2px;
      transition: color 0.2s, border-color 0.2s;
    }

    .tab-btn.active { color: var(--black); border-bottom-color: var(--accent); }

    .tab-content { display: none; }
    .tab-content.active { display: block; }

    .tab-content p {
      color: var(--gray);
      line-height: 1.8;
      font-size: 0.9rem;
      max-width: 700px;
      margin-bottom: 16px;
    }

    .spec-table { width: 100%; max-width: 500px; border-collapse: collapse; font-size: 0.85rem; }
    .spec-table tr { border-bottom: 1px solid #eee; }
    .spec-table td { padding: 10px 14px; }
    .spec-table td:first-child { color: var(--gray); width: 40%; }
    .spec-table td:last-child { font-weight: 500; }

    /* REVIEWS */
    .review-summary {
      display: flex;
      gap: 40px;
      align-items: center;
      margin-bottom: 36px;
      padding-bottom: 36px;
      border-bottom: 1px solid #eee;
      flex-wrap: wrap;
    }

    .review-avg {
      text-align: center;
    }

    .review-avg .big-num {
      font-family: 'Playfair Display', serif;
      font-size: 4rem;
      line-height: 1;
      color: var(--black);
    }

    .review-avg .stars { font-size: 1.1rem; color: var(--accent); margin: 6px 0; }
    .review-avg p { font-size: 0.78rem; color: var(--gray); }

    .review-bars { flex: 1; min-width: 200px; display: flex; flex-direction: column; gap: 8px; }

    .bar-row { display: flex; align-items: center; gap: 10px; font-size: 0.78rem; color: var(--gray); }

    .bar-track { flex: 1; height: 6px; background: #eee; border-radius: 3px; overflow: hidden; }
    .bar-fill { height: 100%; background: var(--accent); border-radius: 3px; }

    .review-card {
      border: 1px solid #eee;
      padding: 24px;
      margin-bottom: 16px;
      transition: border-color 0.2s;
    }

    .review-card:hover { border-color: var(--accent); }

    .review-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
      margin-bottom: 10px;
    }

    .reviewer { display: flex; align-items: center; gap: 10px; }
    .reviewer img { width: 38px; height: 38px; border-radius: 50%; object-fit: cover; }
    .reviewer strong { font-size: 0.85rem; display: block; }
    .reviewer span { font-size: 0.75rem; color: var(--gray); }
    .review-date { font-size: 0.75rem; color: var(--gray); }

    .review-card .stars { font-size: 0.88rem; color: var(--accent); margin-bottom: 8px; }
    .review-card p { font-size: 0.85rem; color: #444; line-height: 1.7; }

    /* RELATED PRODUCTS */
    .related {
      padding: 70px 5%;
      background: var(--cream);
    }

    @media (max-width: 1024px) {
      .product-main { gap: 36px; }
    }

    @media (max-width: 768px) {
      .product-main { flex-direction: column; padding: 30px 4%; }
      .product-gallery { max-width: 100%; flex-direction: column-reverse; }
      .thumb-col { flex-direction: row; }
      .thumb { width: 60px; height: 72px; }
      .main-img-wrap img { height: 380px; }
      .product-details { max-width: 100%; }
      .tab-btn { padding: 12px 16px; font-size: 0.75rem; }
    }
  </style>
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <a href="index.php">Home</a><span>/</span>
    <a href="new-products.php">New Arrivals</a><span>/</span>
    Lace Push-Up Bra
  </div>

  <!-- PRODUCT MAIN -->
  <section class="product-main">

    <!-- IMAGE GALLERY -->
    <div class="product-gallery">
      <div class="thumb-col">
        <img class="thumb active" src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=200&q=80" onclick="changeImg(this, 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=700&q=80')" />
        <img class="thumb" src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=200&q=80" onclick="changeImg(this, 'https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=700&q=80')" />
        <img class="thumb" src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=200&q=80" onclick="changeImg(this, 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=700&q=80')" />
        <img class="thumb" src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=200&q=80" onclick="changeImg(this, 'https://images.unsplash.com/photo-1509631179647-0177331693ae?w=700&q=80')" />
      </div>
      <div class="main-img-wrap">
        <img id="mainImg" src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=700&q=80" alt="Lace Push-Up Bra" />
        <span class="img-badge">30% OFF</span>
        <button class="img-wishlist" id="wishBtn" onclick="toggleWish()"><i class="far fa-heart"></i></button>
      </div>
    </div>

    <!-- PRODUCT DETAILS -->
    <div class="product-details">
      <p class="pd-brand">LUXORA</p>
      <h1 class="pd-title">Lace Push-Up Bra</h1>

      <div class="pd-rating">
        <div class="stars">★★★★★</div>
        <span>4.8</span>
        <a href="#reviews">(124 reviews)</a>
      </div>

      <div class="pd-price">
        <span class="price">₹1,199</span>
        <span class="old-price">₹1,699</span>
        <span class="discount-tag">30% OFF</span>
      </div>
      <p class="pd-tax">Inclusive of all taxes. Free shipping above ₹999.</p>

      <hr class="pd-divider" />

      <!-- COLOR -->
      <p class="pd-label">Color <span id="colorName">Black</span></p>
      <div class="color-options">
        <div class="color-dot active" style="background:#111" title="Black" onclick="selectColor(this, 'Black')"></div>
        <div class="color-dot" style="background:#d56d90" title="Pink" onclick="selectColor(this, 'Pink')"></div>
        <div class="color-dot" style="background:#c9a96e" title="Gold" onclick="selectColor(this, 'Gold')"></div>
        <div class="color-dot" style="background:#fff;border:1.5px solid #ddd" title="White" onclick="selectColor(this, 'White')"></div>
        <div class="color-dot" style="background:#6b8cba" title="Blue" onclick="selectColor(this, 'Blue')"></div>
      </div>

      <!-- SIZE -->
      <p class="pd-label">Size <span id="sizeName">Select Size</span></p>
      <div class="size-options">
        <button class="size-btn out" disabled>XS</button>
        <button class="size-btn" onclick="selectSize(this)">S</button>
        <button class="size-btn" onclick="selectSize(this)">M</button>
        <button class="size-btn" onclick="selectSize(this)">L</button>
        <button class="size-btn" onclick="selectSize(this)">XL</button>
        <button class="size-btn out" disabled>XXL</button>
      </div>
      <a class="size-guide-link">Size Guide →</a>

      <hr class="pd-divider" />

      <!-- QTY + CART -->
      <div class="pd-actions">
        <div class="qty-wrap">
          <button onclick="changeQty(-1)">−</button>
          <input type="number" id="qtyInput" value="1" min="1" max="10" />
          <button onclick="changeQty(1)">+</button>
        </div>
        <button class="btn-cart" onclick="addToCart()">
          <i class="fas fa-bag-shopping"></i> Add to Cart
        </button>
      </div>
      <button class="btn-buy">Buy Now</button>

      <!-- DELIVERY -->
      <div class="delivery-info">
        <div class="delivery-row"><i class="fas fa-truck"></i> Free delivery on orders above ₹999</div>
        <div class="delivery-row"><i class="fas fa-rotate-left"></i> Easy 30-day returns & exchanges</div>
        <div class="delivery-row"><i class="fas fa-shield-halved"></i> 100% authentic & quality guaranteed</div>
        <div class="delivery-row"><i class="fas fa-bolt"></i> Usually ships in 1–2 business days</div>
      </div>

      <!-- SHARE -->
      <div class="pd-share">
        <span>Share:</span>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-pinterest-p"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
      </div>

    </div>
  </section>

  <!-- TABS: DESCRIPTION / SPECS / REVIEWS -->
  <section class="product-tabs" id="reviews">
    <div class="tab-nav">
      <button class="tab-btn active" onclick="openTab(this,'desc')">Description</button>
      <button class="tab-btn" onclick="openTab(this,'specs')">Specifications</button>
      <button class="tab-btn" onclick="openTab(this,'reviews')">Reviews (124)</button>
    </div>

    <!-- DESCRIPTION -->
    <div class="tab-content active" id="desc">
      <p>Elevate your everyday with our signature <strong>Lace Push-Up Bra</strong> — designed to combine delicate femininity with incredible comfort. Crafted from premium stretch lace with a smooth satin lining, this bra offers gentle lift and a flattering silhouette.</p>
      <p>The underwire construction provides structure while the padded cups ensure a natural, enhanced shape. Adjustable straps and a multi-hook back closure allow for a perfectly customised fit all day long.</p>
      <p>Perfect for wearing under form-fitting tops, date nights, or simply because you deserve to feel luxurious every day.</p>
      <ul style="color:var(--gray);font-size:0.88rem;line-height:2;padding-left:20px;margin-top:10px;">
        <li>Premium stretch lace with satin lining</li>
        <li>Padded push-up cups for natural lift</li>
        <li>Underwired for shape & support</li>
        <li>Adjustable & detachable straps</li>
        <li>3-hook back closure</li>
        <li>Hand wash recommended</li>
      </ul>
    </div>

    <!-- SPECS -->
    <div class="tab-content" id="specs">
      <table class="spec-table">
        <tr><td>Brand</td><td>LUXORA</td></tr>
        <tr><td>Material</td><td>80% Nylon, 20% Spandex</td></tr>
        <tr><td>Lining</td><td>100% Polyester Satin</td></tr>
        <tr><td>Closure</td><td>3-Hook Back Closure</td></tr>
        <tr><td>Padding</td><td>Removable Foam Padding</td></tr>
        <tr><td>Wiring</td><td>Underwired</td></tr>
        <tr><td>Strap Type</td><td>Adjustable & Detachable</td></tr>
        <tr><td>Care</td><td>Hand Wash Cold, Do Not Tumble Dry</td></tr>
        <tr><td>Country of Origin</td><td>India</td></tr>
        <tr><td>SKU</td><td>LXR-BRA-001-BLK</td></tr>
      </table>
    </div>

    <!-- REVIEWS -->
    <div class="tab-content" id="reviews">
      <div class="review-summary">
        <div class="review-avg">
          <div class="big-num">4.8</div>
          <div class="stars">★★★★★</div>
          <p>Based on 124 reviews</p>
        </div>
        <div class="review-bars">
          <div class="bar-row">5★ <div class="bar-track"><div class="bar-fill" style="width:78%"></div></div> 78%</div>
          <div class="bar-row">4★ <div class="bar-track"><div class="bar-fill" style="width:14%"></div></div> 14%</div>
          <div class="bar-row">3★ <div class="bar-track"><div class="bar-fill" style="width:5%"></div></div> 5%</div>
          <div class="bar-row">2★ <div class="bar-track"><div class="bar-fill" style="width:2%"></div></div> 2%</div>
          <div class="bar-row">1★ <div class="bar-track"><div class="bar-fill" style="width:1%"></div></div> 1%</div>
        </div>
      </div>

      <div class="review-card">
        <div class="review-header">
          <div class="reviewer">
            <img src="https://i.pravatar.cc/40?img=1" />
            <div><strong>Priya Sharma</strong><span>Verified Purchase</span></div>
          </div>
          <span class="review-date">12 Jan 2025</span>
        </div>
        <div class="stars">★★★★★</div>
        <p>Absolutely love this bra! The lace is so soft and the push-up effect is perfect — not too much, just the right amount of lift. Sizing was accurate and delivery was super fast. Will definitely order more colors!</p>
      </div>

      <div class="review-card">
        <div class="review-header">
          <div class="reviewer">
            <img src="https://i.pravatar.cc/40?img=5" />
            <div><strong>Sneha Kapoor</strong><span>Verified Purchase</span></div>
          </div>
          <span class="review-date">5 Feb 2025</span>
        </div>
        <div class="stars">★★★★★</div>
        <p>The quality is premium for the price. Very comfortable to wear all day. The lace doesn't scratch at all. Packaging was also beautiful — felt like a luxury gift!</p>
      </div>

      <div class="review-card">
        <div class="review-header">
          <div class="reviewer">
            <img src="https://i.pravatar.cc/40?img=9" />
            <div><strong>Ananya Mehta</strong><span>Verified Purchase</span></div>
          </div>
          <span class="review-date">18 Feb 2025</span>
        </div>
        <div class="stars">★★★★☆</div>
        <p>Really nice bra, great fit in size M. Only minor thing is I wish it came in more colors. The gold and pink ones look gorgeous in the photos too. Overall very happy with this purchase!</p>
      </div>
    </div>
  </section>

  <!-- RELATED PRODUCTS -->
  <section class="related">
    <h2 class="section-title">You May Also Like</h2>
    <div class="products-grid">

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=400&q=80" alt="Product" />
          <span class="badge">New</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Satin Night Gown</h4>
          <div class="product-price"><span class="price">₹1,499</span><span class="old-price">₹2,299</span></div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=400&q=80" alt="Product" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Linen Co-ord Set</h4>
          <div class="product-price"><span class="price">₹2,199</span><span class="old-price">₹2,999</span></div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=400&q=80" alt="Product" />
          <span class="badge sale">Sale</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Pearl Necklace Set</h4>
          <div class="product-price"><span class="price">₹799</span></div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="Product" />
          <span class="badge">Hot</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Evening Slip Dress</h4>
          <div class="product-price"><span class="price">₹1,899</span><span class="old-price">₹2,499</span></div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

    </div>
  </section>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="script.js"></script>
  <script>
    // Image gallery
    function changeImg(thumb, src) {
      document.getElementById('mainImg').src = src;
      document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
      thumb.classList.add('active');
    }

    // Wishlist toggle
    function toggleWish() {
      const btn = document.getElementById('wishBtn');
      btn.classList.toggle('active');
      btn.innerHTML = btn.classList.contains('active')
        ? '<i class="fas fa-heart"></i>'
        : '<i class="far fa-heart"></i>';
    }

    // Color select
    function selectColor(el, name) {
      document.querySelectorAll('.color-dot').forEach(d => d.classList.remove('active'));
      el.classList.add('active');
      document.getElementById('colorName').textContent = name;
    }

    // Size select
    function selectSize(el) {
      document.querySelectorAll('.size-btn:not(.out)').forEach(b => b.classList.remove('active'));
      el.classList.add('active');
      document.getElementById('sizeName').textContent = el.textContent;
    }

    // Quantity
    function changeQty(val) {
      const input = document.getElementById('qtyInput');
      const newVal = Math.min(10, Math.max(1, parseInt(input.value) + val));
      input.value = newVal;
    }

    // Add to cart feedback
    function addToCart() {
      const btn = document.querySelector('.btn-cart');
      btn.innerHTML = '<i class="fas fa-check"></i> Added!';
      btn.style.background = '#2ecc71';
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-bag-shopping"></i> Add to Cart';
        btn.style.background = '';
      }, 2000);
    }

    // Tabs
    function openTab(btn, id) {
      document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
      document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
      btn.classList.add('active');
      document.getElementById(id).classList.add('active');
    }
  </script>

</body>
</html>
