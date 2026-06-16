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
  <link rel="stylesheet" href="css/category.css" />
  <style>

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
        <div class="sub-cat-label">
          <h4>Padded Bras</h4><span>8 Products</span>
        </div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=400&q=80" alt="Non-Padded" />
        <div class="sub-cat-label">
          <h4>Non-Padded</h4><span>5 Products</span>
        </div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=400&q=80" alt="Sports Bras" />
        <div class="sub-cat-label">
          <h4>Sports Bras</h4><span>6 Products</span>
        </div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=400&q=80" alt="Wireless" />
        <div class="sub-cat-label">
          <h4>Wireless</h4><span>4 Products</span>
        </div>
      </div>
      <div class="sub-cat-card">
        <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="T-Shirt Bras" />
        <div class="sub-cat-label">
          <h4>T-Shirt Bras</h4><span>5 Products</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SALE BANNER -->
  <div class="cat-banner">
    <div class="cat-banner-text">
      <p>Limited Time Offer</p>
      <h2>Up to 50% OFF<br />on Sale Collection</h2>
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
          <div>
            <h4>Bras</h4><span>18 Products</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=500&q=80" alt="Panties" />
        <div class="all-cat-info">
          <div>
            <h4>Panties</h4><span>12 Products</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?w=500&q=80" alt="Nightwear" />
        <div class="all-cat-info">
          <div>
            <h4>Nightwear</h4><span>9 Products</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=500&q=80" alt="Accessories" />
        <div class="all-cat-info">
          <div>
            <h4>Accessories</h4><span>6 Products</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500&q=80" alt="Sale" />
        <div class="all-cat-info">
          <div>
            <h4>Sale</h4><span>Up to 50% Off</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=500&q=80" alt="New Arrivals" />
        <div class="all-cat-info">
          <div>
            <h4>New Arrivals</h4><span>Just In</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=500&q=80" alt="Sets & Combos" />
        <div class="all-cat-info">
          <div>
            <h4>Sets & Combos</h4><span>10 Products</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

      <a href="products.php" class="all-cat-card">
        <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=500&q=80" alt="Bestsellers" />
        <div class="all-cat-info">
          <div>
            <h4>Bestsellers</h4><span>Top Picks</span>
          </div>
          <i class="fas fa-arrow-right"></i>
        </div>
      </a>

    </div>
  </section>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="js/script.js"></script>

</body>

</html>