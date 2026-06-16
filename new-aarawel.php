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
  <link rel="stylesheet" href="css/new-aarawel.css" />
  <style>

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

  <script src="js/script.js"></script>
  <script src="js/new-aarawel.js"></script>

</body>

</html>