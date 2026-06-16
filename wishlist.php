<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Wishlist — LUXORA</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/footer.css" />
  <link rel="stylesheet" href="css/wishlist.css" />
</head>
<body>

  <?php include("include/header.php"); ?>

  <div class="breadcrumb-bar">
    <a href="index.php">Home</a><span>/</span> My Wishlist
  </div>

  <section class="wishlist-section">
    <div class="wishlist-header">
      <h2>My Wishlist</h2>
      <span id="wishCount">0 Items</span>
    </div>

    <!-- DYNAMIC GRID -->
    <div class="wishlist-grid" id="wishlistGrid"></div>

    <!-- EMPTY STATE -->
    <div class="wish-empty" id="wishEmpty" style="display:none">
      <i class="fas fa-heart"></i>
      <p>Your wishlist is empty</p>
      <a href="products.php" class="btn-primary">Explore Products</a>
    </div>
  </section>

  <?php include("include/footer.php"); ?>

  <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top:0,behavior:'smooth'})">
    <i class="fas fa-arrow-up"></i>
  </button>

  <script src="js/script.js"></script>
  <script>
    function loadWishlistPage() {
      const list = getWishlist();
      const grid = document.getElementById('wishlistGrid');
      const empty = document.getElementById('wishEmpty');
      const countEl = document.getElementById('wishCount');

      countEl.textContent = list.length + ' Item' + (list.length !== 1 ? 's' : '');

      if (list.length === 0) {
        grid.style.display = 'none';
        empty.style.display = 'block';
        return;
      }

      grid.innerHTML = list.map(item => `
        <div class="wish-card" id="wc-${item.id}">
          <div class="wish-img-wrap">
            <img src="${item.img}" alt="${item.name}" />
            <button class="wish-remove-btn" onclick="removeFromWishlist('${item.id}')" title="Remove">
              <i class="fas fa-heart"></i>
            </button>
          </div>
          <div class="wish-info">
            <p class="wish-brand">LUXORA</p>
            <h4>${item.name}</h4>
            <p class="wish-price">₹${item.price.toLocaleString('en-IN')}</p>
            <button class="wish-cart-btn" onclick="window.location='product-details.php'">
              <i class="fas fa-bag-shopping"></i> Add to Cart
            </button>
          </div>
        </div>
      `).join('');
    }

    function removeFromWishlist(id) {
      removeWishItem(id);
      const card = document.getElementById('wc-' + id);
      if (card) {
        card.style.opacity = '0';
        card.style.transform = 'scale(0.9)';
        card.style.transition = 'all 0.3s ease';
        setTimeout(() => { card.remove(); loadWishlistPage(); }, 300);
      }
    }

    loadWishlistPage();
  </script>
</body>
</html>
