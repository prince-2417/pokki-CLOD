function toggleMenu() {
  const menu = document.getElementById('mobileMenu');
  menu.classList.toggle('open');
}

// Add to cart interaction
document.querySelectorAll('.add-to-cart').forEach(btn => {
  btn.addEventListener('click', function () {
    const countEl = document.querySelector('.cart-count');
    countEl.textContent = parseInt(countEl.textContent) + 1;
    this.textContent = '✓ Added!';
    this.style.background = '#27ae60';
    setTimeout(() => {
      this.textContent = 'Add to Cart';
      this.style.background = '';
    }, 1500);
  });
});

// Back to top button visibility
window.addEventListener('scroll', () => {
  const btn = document.getElementById('backToTop');
  btn.classList.toggle('visible', window.scrollY > 400);
});

// Wishlist toggle
document.querySelectorAll('.product-actions button:first-child').forEach(btn => {
  btn.addEventListener('click', function () {
    const icon = this.querySelector('i');
    icon.style.color = icon.style.color === 'red' ? '' : 'red';
  });
});

// Newsletter form
document.querySelector('.newsletter-form').addEventListener('submit', function () {
  const input = this.querySelector('input');
  const btn = this.querySelector('button');
  if (input.value) {
    btn.textContent = '✓ Subscribed!';
    btn.style.background = '#27ae60';
    input.value = '';
    setTimeout(() => {
      btn.textContent = 'Subscribe';
      btn.style.background = '';
    }, 2500);
  }
});
