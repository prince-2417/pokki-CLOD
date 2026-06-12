<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LUXORA — Fashion Redefined</title>
  <link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap"
  rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- HERO SECTION -->
  <section class="hero">
    <div class="hero-content">
      <p class="hero-sub">New Collection 2025</p>
      <h1>Wear Your<br /><span>Confidence</span></h1>
      <p class="hero-desc">Curated fashion for the bold and the beautiful. Discover styles that speak louder than words.
      </p>
      <div class="hero-btns">
        <a href="#" class="btn-primary">Shop Women</a>
        <a href="#" class="btn-outline">Shop Men</a>
      </div>
    </div>
    <div class="hero-image">
      <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=600&q=80" alt="Hero Fashion" />
      <div class="hero-badge">NEW IN</div>
    </div>
  </section>

  <!-- STATS BAR -->
  <section class="stats-bar">
    <div class="stat-item">
      <h3>50K+</h3>
      <p>Happy Customers</p>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
      <h3>2000+</h3>
      <p>Products Available</p>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
      <h3>100+</h3>
      <p>Premium Brands</p>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item">
      <h3>4.9★</h3>
      <p>Average Rating</p>
    </div>
  </section>

  <!-- MARQUEE -->
  <div class="marquee-wrap">
    <div class="marquee-track">
      <span>TRENDING NOW</span><span>★</span>
      <span>NEW ARRIVALS</span><span>★</span>
      <span>SUMMER SALE</span><span>★</span>
      <span>FREE SHIPPING</span><span>★</span>
      <span>TRENDING NOW</span><span>★</span>
      <span>NEW ARRIVALS</span><span>★</span>
      <span>SUMMER SALE</span><span>★</span>
      <span>FREE SHIPPING</span><span>★</span>
    </div>
  </div>

  <!-- CATEGORIES -->
  <section class="categories" id="categories">
    <h2 class="section-title">Shop by Category</h2>
    <div class="cat-grid">
      <div class="cat-card large">
        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?w=600&q=80" alt="Women" />
        <div class="cat-overlay">
          <h3>Women</h3>
          <a href="#">Explore →</a>
        </div>
      </div>
      <div class="cat-card">
        <img src="https://images.unsplash.com/photo-1516257984-b1b4d707412e?w=400&q=80" alt="Men" />
        <div class="cat-overlay">
          <h3>Men</h3>
          <a href="#">Explore →</a>
        </div>
      </div>
      <div class="cat-card">
        <img src="https://images.unsplash.com/photo-1606760227091-3dd870d97f1d?w=400&q=80" alt="Accessories" />
        <div class="cat-overlay">
          <h3>Accessories</h3>
          <a href="#">Explore →</a>
        </div>
      </div>
    </div>
  </section>

  <!-- FEATURED PRODUCTS -->
  <section class="products" id="products">
    <h2 class="section-title">Featured Products</h2>
    <div class="products-grid">

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="image/index/debby-ledet-2ZXVU3BJzN4-unsplash.jpg" alt="Dress" />
          <span class="badge">New</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Floral Wrap Dress</h4>
          <div class="product-price">
            <span class="price">₹1,299</span>
            <span class="old-price">₹1,899</span>
          </div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&q=80" alt="Tshirt" />
          <span class="badge sale">Sale</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Classic White Tee</h4>
          <div class="product-price">
            <span class="price">₹599</span>
            <span class="old-price">₹899</span>
          </div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&q=80" alt="Bag" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Leather Tote Bag</h4>
          <div class="product-price">
            <span class="price">₹2,499</span>
          </div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&q=80" alt="Shoes" />
          <span class="badge">Hot</span>
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Sporty Sneakers</h4>
          <div class="product-price">
            <span class="price">₹3,199</span>
            <span class="old-price">₹4,499</span>
          </div>
          <button class="add-to-cart">Add to Cart</button>
        </div>
      </div>

    </div>
  </section>

  <!-- NEW ARRIVALS SLIDER -->
  <section class="new-arrivals">
    <div class="arrivals-header">
      <h2 class="section-title" style="margin-bottom:0">New Arrivals</h2>
      <a href="#" class="view-all">View All →</a>
    </div>
    <div class="arrivals-slider">
      <div class="arrival-card">
        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?w=300&q=80" alt="Look 1" />
        <div class="arrival-info">
          <h4>Boho Summer Dress</h4>
          <span>₹1,499</span>
        </div>
      </div>
      <div class="arrival-card">
        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?w=300&q=80" alt="Look 2" />
        <div class="arrival-info">
          <h4>Linen Co-ord Set</h4>
          <span>₹2,199</span>
        </div>
      </div>
      <div class="arrival-card">
        <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=300&q=80" alt="Look 3" />
        <div class="arrival-info">
          <h4>Flowy Maxi Skirt</h4>
          <span>₹999</span>
        </div>
      </div>
      <div class="arrival-card">
        <img src="https://images.unsplash.com/photo-1525507119028-ed4c629a60a3?w=300&q=80" alt="Look 4" />
        <div class="arrival-info">
          <h4>Denim Jacket</h4>
          <span>₹2,899</span>
        </div>
      </div>
      <div class="arrival-card">
        <img src="https://images.unsplash.com/photo-1618932260643-eee4a2f652a6?w=300&q=80" alt="Look 5" />
        <div class="arrival-info">
          <h4>Strappy Heels</h4>
          <span>₹3,499</span>
        </div>
      </div>
      <div class="arrival-card">
        <img src="https://images.unsplash.com/photo-1583744946564-b52ac1c389c8?w=300&q=80" alt="Look 6" />
        <div class="arrival-info">
          <h4>Pearl Necklace Set</h4>
          <span>₹799</span>
        </div>
      </div>
    </div>
  </section>

  <!-- BANNER -->
  <section class="promo-banner">
    <div class="promo-content">
      <p>Limited Time Offer</p>
      <h2>Up to 50% OFF on<br />Summer Collection</h2>
      <a href="#" class="btn-primary">Shop the Sale</a>
    </div>
  </section>

  <!-- BRAND LOGOS -->
  <section class="brands">
    <p class="brands-label">AS FEATURED IN</p>
    <div class="brands-grid">
      <div class="brand-logo">VOGUE</div>
      <div class="brand-logo">ELLE</div>
      <div class="brand-logo">HARPER'S</div>
      <div class="brand-logo">FEMINA</div>
      <div class="brand-logo">GQ</div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section class="testimonials">
    <h2 class="section-title">What Our Customers Say</h2>
    <div class="testi-grid">
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Absolutely love the quality! The dress fit perfectly and the material is so soft. Will definitely order
          again."</p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/40?img=1" alt="User" />
          <span>Priya Sharma</span>
        </div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★★</div>
        <p>"Fast delivery and amazing packaging. The tote bag is exactly as shown — premium quality at a great price!"
        </p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/40?img=5" alt="User" />
          <span>Rahul Mehta</span>
        </div>
      </div>
      <div class="testi-card">
        <div class="stars">★★★★☆</div>
        <p>"Great collection! Very trendy and affordable. Customer service was super helpful with my size query."</p>
        <div class="testi-author">
          <img src="https://i.pravatar.cc/40?img=9" alt="User" />
          <span>Sneha Kapoor</span>
        </div>
      </div>
    </div>
  </section>

  <!-- LOOKBOOK GALLERY -->
  <section class="lookbook">
    <h2 class="section-title">The Lookbook</h2>
    <p class="lookbook-sub">Curated styles for every occasion</p>
    <div class="lookbook-grid">

      <div class="look-item look-tall">
        <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?w=600&q=80" alt="Look 1" />
        <div class="look-label">
          <span>Summer Vibes</span>
          <a href="#">Shop Now →</a>
        </div>
      </div>

      <div class="look-item">
        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=600&q=80" alt="Look 2" />
        <div class="look-label">
          <span>Street Style</span>
          <a href="#">Shop Now →</a>
        </div>
      </div>

      <div class="look-item">
        <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=600&q=80" alt="Look 3" />
        <div class="look-label">
          <span>Evening Glam</span>
          <a href="#">Shop Now →</a>
        </div>
      </div>

      <div class="look-item look-wide">
        <img src="image/index/tamara-bellis-68csPWTnafo-unsplash.jpg" alt="Look 4" />
        <div class="look-label">
          <span>Casual Chic</span>
          <a href="#">Shop Now →</a>
        </div>
      </div>

      <div class="look-item">
        <img src="https://images.unsplash.com/photo-1581044777550-4cfa60707c03?w=600&q=80" alt="Look 5" />
        <div class="look-label">
          <span>Office Ready</span>
          <a href="#">Shop Now →</a>
        </div>
      </div>

    </div>
  </section>

  <!-- NEWSLETTER -->
  <section class="newsletter">
    <h2>Join the LUXORA Family</h2>
    <p>Subscribe for exclusive deals, new arrivals & style inspiration</p>
    <form class="newsletter-form" onsubmit="return false;">
      <input type="email" placeholder="Enter your email address" />
      <button type="submit">Subscribe</button>
    </form>
  </section>

    <?php include("include/footer.php"); ?>
    
  <!-- BACK TO TOP -->
  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})"><i
      class="fas fa-arrow-up"></i></button>

  <script src="script.js"></script>
</body>

</html>