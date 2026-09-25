// On page load — check if product is already wishlisted
document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('wishBtn');
    if (!btn) return;
    const name = document.querySelector('.pd-title').textContent.trim();
    const id   = name.toLowerCase().replace(/\s+/g, '-');
    if (getWishlist().find(i => i.id === id)) {
        btn.classList.add('active');
        btn.innerHTML = '<i class="fas fa-heart" style="color:#e74c3c"></i>';
    }
});

// Image gallery
function changeImg(thumb, src) {
    const mainImg = document.getElementById('mainImg');
    const imageWrap = mainImg.closest('.main-img-wrap');

    mainImg.src = src;
    mainImg.style.transform = 'scale(1)';
    mainImg.style.transformOrigin = 'center center';
    imageWrap.classList.remove('is-zoomed');
    document.querySelectorAll('.thumb').forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
}

const mainImageWrap = document.querySelector('.main-img-wrap');
const mainImage = document.getElementById('mainImg');

if (mainImageWrap && mainImage) {
    mainImageWrap.addEventListener('mousemove', (event) => {
        const bounds = mainImageWrap.getBoundingClientRect();
        const x = ((event.clientX - bounds.left) / bounds.width) * 100;
        const y = ((event.clientY - bounds.top) / bounds.height) * 100;

        mainImage.style.transformOrigin = `${x}% ${y}%`;
        mainImage.style.transform = 'scale(2.2)';
        mainImageWrap.classList.add('is-zoomed');
    });

    mainImageWrap.addEventListener('mouseleave', () => {
        mainImage.style.transform = 'scale(1)';
        mainImage.style.transformOrigin = 'center center';
        mainImageWrap.classList.remove('is-zoomed');
    });
}

// Wishlist toggle
function toggleWish() {
    const btn = document.getElementById('wishBtn');
    const name  = document.querySelector('.pd-title').textContent.trim();
    const img   = document.getElementById('mainImg').src;
    const price = parseInt(document.querySelector('.pd-price .price').textContent.replace(/[^0-9]/g, ''));
    const id    = name.toLowerCase().replace(/\s+/g, '-');

    const added = toggleWishlistItem(id, name, img, price);
    btn.classList.toggle('active', added);
    btn.innerHTML = added
        ? '<i class="fas fa-heart" style="color:#e74c3c"></i>'
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
    const name = document.querySelector('.pd-title').textContent;
    const img  = document.getElementById('mainImg').src;
    const price = parseInt(document.querySelector('.pd-price .price').textContent.replace(/[^0-9]/g, ''));
    const color = document.getElementById('colorName').textContent;
    const size  = document.getElementById('sizeName').textContent;
    const id    = name.toLowerCase().replace(/\s+/g, '-');

    addItemToCart(id, name, img, price, color, size);

    btn.innerHTML = '<i class="fas fa-check"></i> Added!';
    btn.style.background = '#2ecc71';
    setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-bag-shopping"></i> Add to Cart';
        btn.style.background = '';
    }, 1500);
}

// Tabs
function openTab(btn, id) {
    document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(id).classList.add('active');
}
