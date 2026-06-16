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
  <link rel="stylesheet" href="css/product-details.css" />
  <style>

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
      <button class="btn-buy" onclick="window.location='cart.php'">Buy Now</button>

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

  <script src="js/script.js"></script>
  <script src="js/product-details.js"></script>


</body>
</html>
