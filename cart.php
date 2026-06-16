<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Cart — LUXORA</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/cart.css" />
</head>

<body>

  <?php include("include/header.php"); ?>

  <!-- BREADCRUMB -->
  <div class="breadcrumb-bar">
    <a href="index.php">Home</a><span>/</span> My Cart
  </div>

  <!-- CART SECTION -->
  <section class="cart-section">

    <!-- LEFT: CART ITEMS -->
    <div class="cart-left">
      <div class="cart-header">
        <h2>Shopping Cart</h2>
        <span id="cartItemCount">0 Items</span>
      </div>

      <!-- DYNAMIC ITEMS (loaded by cart.js from localStorage) -->
      <div id="cartItemsContainer"></div>

      <!-- EMPTY STATE -->
      <div class="cart-empty" id="cartEmpty" style="display:none">
        <i class="fas fa-bag-shopping"></i>
        <p>Your cart is empty</p>
        <a href="products.php" class="btn-primary">Continue Shopping</a>
      </div>

      <!-- COUPON -->
      <div class="coupon-row">
        <input type="text" id="couponInput" placeholder="Enter coupon code (e.g. LUXORA10)" />
        <button onclick="applyCoupon()">Apply</button>
      </div>
      <p class="coupon-msg" id="couponMsg"></p>
    </div>

    <!-- RIGHT: ORDER SUMMARY -->
    <div class="cart-right">
      <h3>Order Summary</h3>

      <div class="summary-row">
        <span>Subtotal (<span id="totalItems">3</span> items)</span>
        <span id="subtotalVal">₹3,497</span>
      </div>
      <div class="summary-row">
        <span>Discount</span>
        <span id="discountVal" class="green">− ₹0</span>
      </div>
      <div class="summary-row">
        <span>Delivery</span>
        <span id="deliveryVal">FREE</span>
      </div>

      <hr class="summary-divider" />

      <div class="summary-row total-row">
        <span>Total</span>
        <span id="totalVal">₹3,497</span>
      </div>

      <p class="saving-msg" id="savingMsg" style="display:none">🎉 You are saving <strong id="savingAmt"></strong> on this order!</p>

      <button class="btn-checkout" onclick="window.location='#'">
        Proceed to Checkout <i class="fas fa-arrow-right"></i>
      </button>

      <a href="products.php" class="continue-link">← Continue Shopping</a>

      <!-- TRUST BADGES -->
      <div class="trust-badges">
        <div><i class="fas fa-shield-halved"></i> Secure Payment</div>
        <div><i class="fas fa-truck"></i> Free Delivery ₹999+</div>
        <div><i class="fas fa-rotate-left"></i> Easy Returns</div>
      </div>
    </div>

  </section>

  <!-- YOU MAY ALSO LIKE -->
  <section class="related" style="padding:60px 5%; background:var(--cream);">
    <h2 class="section-title">You May Also Like</h2>
    <div class="products-grid">
      <div class="product-card">
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
          <div class="product-price"><span class="price">₹999</span><span class="old-price">₹1,499</span></div>
          <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
        </div>
      </div>

      <div class="product-card">
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
          <div class="product-price"><span class="price">₹1,399</span><span class="old-price">₹1,899</span></div>
          <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
        </div>
      </div>

      <div class="product-card">
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
          <div class="product-price"><span class="price">₹2,199</span><span class="old-price">₹2,999</span></div>
          <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
        </div>
      </div>

      <div class="product-card">
        <div class="product-img-wrap">
          <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?w=400&q=80" alt="Lace Panty" />
          <div class="product-actions">
            <button><i class="fas fa-heart"></i></button>
            <button onclick="window.location='product-details.php'"><i class="fas fa-eye"></i></button>
          </div>
        </div>
        <div class="product-info">
          <p class="product-brand">LUXORA</p>
          <h4>Lace Bikini Panty</h4>
          <div class="product-price"><span class="price">₹599</span><span class="old-price">₹899</span></div>
          <button class="add-to-cart" onclick="window.location='product-details.php'">View Product</button>
        </div>
      </div>
    </div>
  </section>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="js/script.js"></script>
  <script src="js/cart.js"></script>

</body>
</html>
