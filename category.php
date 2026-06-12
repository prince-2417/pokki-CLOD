<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Categories — LUXORA</title>
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
    .page-banner h1 { font-family: 'Playfair Display', serif; font-size: clamp(2rem, 4vw, 3rem); }
    .page-banner h1 span { color: var(--accent); font-style: italic; }
    .breadcrumb { font-size: 0.8rem; color: var(--gray); }
    .breadcrumb a { color: var(--gray); text-decoration: none; transition: color 0.2s; }
    .breadcrumb a:hover { color: var(--accent); }
    .breadcrumb span { margin: 0 8px; }

    /* HERO CATEGORIES GRID */
    .cat-hero {
      display: grid;
      grid-template-columns: 1.4fr 1fr 1fr;
      grid-template-rows: 300px 300px;
      gap: 12px;
      padding: 50px 5%;
      background: var(--white);
    }

    .cat-hero-item {
      position: relative;
      overflow: hidden;
      cursor: pointer;
    }

    .cat-hero-item.tall { grid-row: span 2; }
    .cat-hero-item.wide { grid-column: span 2; }

    .cat-hero-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.6s ease;
    }

    .cat-hero-item:hover img { transform: scale(1.06); }

    .cat-hero-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.65) 0%, rgba(0,0,0,0.1) 50%, transparent 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 28px;
      transition: background 0.3s;
    }

    .cat-hero-item:hover .cat-hero-overlay {
      background: linear-gradient(to top, rgba(0,0,0,0.75) 0%, rgba(0,0,0,0.2) 60%, transparent 100%);
    }

    .cat-hero-overlay h3 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.2rem, 2vw, 1.8rem);
      color: #fff;
      margin-bottom: 6px;
    }

    .cat-hero-overlay p {
      font-size: 0.78rem;
      color: rgba(255,255,255,0.75);
      margin-bottom: 14px;
      letter-spacing: 0.05em;
    }

    .cat-hero-overlay a {
      display: inline-block;
      color: var(--accent);
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 0.15em;
      text-transform: uppercase;
      text-decoration: none;
      border-bottom: 1px solid var(--accent);
      padding-bottom: 2px;
      transition: letter-spacing 0.3s;
    }

    .cat-hero-item:hover .cat-hero-overlay a { letter-spacing: 0.25em; }

    /* SECTION DIVIDER */
    .section-divider {
      display: flex;
      align-items: center;
      gap: 20px;
      padding: 0 5%;
      margin: 50px 0 30px;
    }
    .section-divider h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.4rem, 2.5vw, 1.8rem);
      white-space: nowrap;
    }
    .section-divider h2 span { color: var(--accent); font-style: italic; }
    .section-divider hr { flex: 1; border: none; border-top: 1px solid #ddd; }

    /* SUB CATEGORIES */
    .sub-cats {
      padding: 0 5% 60px;
      background: var(--white);
    }

    .sub-cats-grid {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 16px;
    }

    .sub-cat-card {
      position: relative;
      overflow: hidden;
      cursor: pointer;
      background: var(--cream);
    }

    .sub-cat-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s;
    }

    .sub-cat-card:hover img { transform: scale(1.08); }

    .sub-cat-label {
      padding: 14px 12px;
      text-align: center;
    }

    .sub-cat-label h4 {
      font-size: 0.85rem;
      font-weight: 600;
      margin-bottom: 4px;
      color: var(--black);
      transition: color 0.2s;
    }

    .sub-cat-card:hover .sub-cat-label h4 { color: var(--accent); }

    .sub-cat-label span {
      font-size: 0.72rem;
      color: var(--gray);
      letter-spacing: 0.05em;
    }

    /* FEATURED BANNER */
    .cat-banner {
      margin: 0 5% 60px;
      background: linear-gradient(135deg, #1a1a1a 0%, #3d2b1a 100%);
      padding: 70px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      position: relative;
      overflow: hidden;
    }

    .cat-banner::before {
      content: 'SALE';
      position: absolute;
      font-size: 14rem;
      font-weight: 900;
      color: rgba(255,255,255,0.03);
      top: 50%; left: 50%;
      transform: translate(-50%, -50%);
      font-family: 'Playfair Display', serif;
      white-space: nowrap;
      pointer-events: none;
    }

    .cat-banner-text { position: relative; z-index: 1; }
    .cat-banner-text p {
      font-size: 0.75rem;
      letter-spacing: 0.3em;
      text-transform: uppercase;
      color: var(--accent);
      margin-bottom: 12px;
      font-weight: 600;
    }
    .cat-banner-text h2 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.8rem, 3vw, 2.8rem);
      color: #fff;
      margin-bottom: 24px;
      line-height: 1.2;
    }

    .cat-banner-imgs {
      display: flex;
      gap: 14px;
      position: relative;
      z-index: 1;
    }

    .cat-banner-imgs img {
      width: 140px;
      height: 180px;
      object-fit: cover;
      opacity: 0.85;
      transition: opacity 0.3s, transform 0.3s;
    }

    .cat-banner-imgs img:hover { opacity: 1; transform: translateY(-6px); }

    /* ALL CATEGORIES CARDS */
    .all-cats {
      padding: 0 5% 80px;
      background: var(--cream);
    }

    .all-cats-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }

    .all-cat-card {
      background: var(--white);
      overflow: hidden;
      cursor: pointer;
      transition: box-shadow 0.3s, transform 0.3s;
      text-decoration: none;
      display: block;
    }

    .all-cat-card:hover {
      box-shadow: 0 14px 40px rgba(0,0,0,0.12);
      transform: translateY(-5px);
    }

    .all-cat-card img {
      width: 100%;
      height: 260px;
      object-fit: cover;
      display: block;
      transition: transform 0.5s;
    }

    .all-cat-card:hover img { transform: scale(1.05); }

    .all-cat-info {
      padding: 18px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .all-cat-info h4 {
      font-family: 'Playfair Display', serif;
      font-size: 1rem;
      color: var(--black);
    }

    .all-cat-info span {
      font-size: 0.72rem;
      color: var(--gray);
      display: block;
      margin-top: 3px;
    }

    .all-cat-info i {
      color: var(--accent);
      font-size: 0.9rem;
      transition: transform 0.2s;
    }

    .all-cat-card:hover .all-cat-info i { transform: translateX(4px); }

    /* RESPONSIVE */
    @media (max-width: 1024px) {
      .sub-cats-grid { grid-template-columns: repeat(3, 1fr); }
      .all-cats-grid { grid-template-columns: repeat(2, 1fr); }
    }

    @media (max-width: 768px) {
      .cat-hero { grid-template-columns: 1fr 1fr; grid-template-rows: auto; }
      .cat-hero-item.tall { grid-row: span 1; }
      .cat-hero-item.wide { grid-column: span 2; }
      .sub-cats-grid { grid-template-columns: repeat(2, 1fr); }
      .cat-banner { flex-direction: column; padding: 50px 30px; }
      .cat-banner-imgs { justify-content: center; }
      .page-banner { flex-direction: column; align-items: flex-start; gap: 10px; }
    }

    @media (max-width: 480px) {
      .cat-hero { grid-template-columns: 1fr; }
      .cat-hero-item.wide { grid-column: span 1; }
      .sub-cats-grid { grid-template-columns: repeat(2, 1fr); }
      .all-cats-grid { grid-template-columns: 1fr 1fr; gap: 12px; }
      .cat-banner-imgs img { width: 100px; height: 130px; }
    }

  </style>
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- PAGE BANNER -->
  <div class="page-banner">
    <div>
      <p class="hero-sub" style="margin-bottom:8px">LUXORA Collection</p>
      <h1>Shop by <span>Category</span></h1>
    </div>
    <div class="breadcrumb">
      <a href="index.php">Home</a><span>/</span> Categories
    </div>
  </div>

  <!-- MARQUEE -->
  <div class="marquee-wrap">
    <div class="marquee-track">
      <span>BRAS</span><span>★</span>
      <span>PANTIES</span><span>★</span>
      <span>NIGHTWEAR</span><span>★</span>
      <span>ACCESSORIES</span><span>★</span>
      <span>SALE UP TO 50% OFF</span><span>★</span>
      <span>BRAS</span><span>★</span>
      <span>PANTIES</span><span>★</span>
      <span>NIGHTWEAR</span><span>★</span>
      <span>ACCESSORIES</span><span>★</span>
      <span>SALE UP TO 50% OFF</span><span>★</span>
    </div>
  </div>

  <!-- HERO GRID -->
  <section class="cat-hero">

    <div class="cat-hero-item tall">
      <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=700&q=80" alt="Bras" />
      <div class="cat-hero-overlay">
        <h3>Bras</h3>
        <p>18 Styles Available</p>
        <a href="products.php">Explore Collection →</a>
      </div>
    </div>

    <div class="cat-hero-item">
      <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=600&q=80" alt="Panties" />
      <div class="cat-hero-overlay">
        <h3>Panties</h3>
        <p>12 Styles Available</p>
        <a href="products.php">Explore Collection →</a>
      </div>
    </div>

    <div class="cat-hero-item">
      <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&q=80" alt="Accessories" />
      <div class="cat-hero-overlay">
        <h3>Accessories</h3>
        <p>6 Styles Available</p>
        <a href="products.php">Explore Collection →</a>
      </div>
    </div>

    <div class="cat-hero-item">
      <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=600&q=80" alt="Nightwear" />
      <div class="cat-hero-overlay">
        <h3>Nightwear</h3>
        <p>9 Styles Available</p>
        <a href="products.php">Explore Collection →</a>
      </div>
    </div>

    <div class="cat-hero-item">
      <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&q=80" alt="Sale" />
      <div class="cat-hero-overlay">
        <h3>Sale</h3>
        <p>Up to 50% Off</p>
        <a href="products.php">Shop the Sale →</a>
      </div>
    </div>

  </section>

  <!-- SUB CATEGORIES — BRAS -->
  <section class="sub-cats">
    <div class="section-divider">
      <h2>Shop <span>Bras</span></h2>
      <hr />
      <a href="products.php" style="font-size:0.8rem;color:var(--accent);text-decoration:none;font-weight:600;white-space:nowrap;">View All →</a>
    </div>
    <div class="sub-cats-grid">
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&q=80" alt="Padded Bras" />
        <div class="sub-cat-label"><h4>Padded Bras</h4><span>8 Products</span></div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="Non-Padded" />
        <div class="sub-cat-label"><h4>Non-Padded</h4><span>5 Products</span></div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=400&q=80" alt="Sports Bras" />
        <div class="sub-cat-label"><h4>Sports Bras</h4><span>6 Products</span></div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=400&q=80" alt="Wireless" />
        <div class="sub-cat-label"><h4>Wireless</h4><span>4 Products</span></div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="T-Shirt Bras" />
        <div class="sub-cat-label"><h4>T-Shirt Bras</h4><span>5 Products</span></div>
      </div>
    </div>
  </section>

  <!-- SALE BANNER -->
  <div class="cat-banner">
    <div class="cat-banner-text">
      <p>Limited Time Offer</p>
      <h2>Up to 50% OFF<br/>on Sale Collection</h2>
      <a href="products.php" class="btn-primary">Shop the Sale</a>
    </div>
    <div class="cat-banner-imgs">
      <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=300&q=80" alt="Sale 1" />
      <img src="https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?w=300&q=80" alt="Sale 2" />
      <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=300&q=80" alt="Sale 3" />
    </div>
  </div>

  <!-- ALL CATEGORIES -->
  <section class="all-cats">
    <div class="section-divider">
      <h2>All <span>Categories</span></h2>
      <hr />
    </div>
    <div class="all-cats-grid">

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=500&q=80" alt="Bras" />
        <div class="all-cat-info">
          <div><h4>Bras</h4><span>18 Products</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=500&q=80" alt="Panties" />
        <div class="all-cat-info">
          <div><h4>Panties</h4><span>12 Products</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=500&q=80" alt="Nightwear" />
        <div class="all-cat-info">
          <div><h4>Nightwear</h4><span>9 Products</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=500&q=80" alt="Accessories" />
        <div class="all-cat-info">
          <div><h4>Accessories</h4><span>6 Products</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80" alt="Sale" />
        <div class="all-cat-info">
          <div><h4>Sale</h4><span>Up to 50% Off</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=500&q=80" alt="New Arrivals" />
        <div class="all-cat-info">
          <div><h4>New Arrivals</h4><span>Just In</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=500&q=80" alt="Sets & Combos" />
        <div class="all-cat-info">
          <div><h4>Sets & Combos</h4><span>10 Products</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=500&q=80" alt="Bestsellers" />
        <div class="all-cat-info">
          <div><h4>Bestsellers</h4><span>Top Picks</span></div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

    </div>
  </section>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="script.js"></script>

</body>
</html>
