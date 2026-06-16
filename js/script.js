// =============================================
// 1. ADD TO CART
// =============================================
document.querySelectorAll('.add-to-cart').forEach(btn => {
    btn.addEventListener('click', function () {
        const countEl = document.querySelector('.cart-count');
        if (countEl) countEl.textContent = parseInt(countEl.textContent) + 1;
        this.textContent = '✓ Added!';
        this.style.background = '#27ae60';
        setTimeout(() => {
            this.textContent = 'Add to Cart';
            this.style.background = '';
        }, 1500);
    });
});

// =============================================
// CART DATA (localStorage based)
// =============================================
const CART_KEY = 'luxora_cart';

function getCart() {
    return JSON.parse(localStorage.getItem(CART_KEY) || '[]');
}

function saveCart(cart) {
    localStorage.setItem(CART_KEY, JSON.stringify(cart));
    renderMiniCart();
}

function addItemToCart(id, name, img, price, color, size) {
    const cart = getCart();
    const existing = cart.find(i => i.id === id);
    if (existing) {
        existing.qty = Math.min(existing.qty + 1, 10);
    } else {
        cart.push({ id, name, img, price, color, size, qty: 1 });
    }
    saveCart(cart);
}

function removeCartItem(id) {
    const cart = getCart().filter(i => i.id !== id);
    saveCart(cart);
}

function renderMiniCart() {
    const cart = getCart();
    const mcItems = document.getElementById('mcItems');
    const mcCount = document.getElementById('mcCount');
    const navCount = document.getElementById('navCartCount');
    const mcTotal = document.getElementById('mcTotal');
    if (!mcItems) return;

    const totalQty = cart.reduce((s, i) => s + i.qty, 0);
    const totalPrice = cart.reduce((s, i) => s + i.price * i.qty, 0);

    if (navCount) navCount.textContent = totalQty;
    if (mcCount) mcCount.textContent = totalQty;
    if (mcTotal) mcTotal.textContent = '₹' + totalPrice.toLocaleString('en-IN');

    if (cart.length === 0) {
        mcItems.innerHTML = '<div class="mc-empty"><i class="fas fa-bag-shopping"></i>Your cart is empty</div>';
        return;
    }

    mcItems.innerHTML = cart.map(item => `
        <div class="mc-item" id="mc-${item.id}">
            <img src="${item.img}" alt="${item.name}" />
            <div class="mc-item-info">
                <h5>${item.name}</h5>
                <p>${item.color} | ${item.size} | Qty: ${item.qty}</p>
                <span class="mc-item-price">₹${(item.price * item.qty).toLocaleString('en-IN')}</span>
            </div>
            <button class="mc-remove" onclick="removeCartItem('${item.id}')" title="Remove"><i class="fas fa-times"></i></button>
        </div>
    `).join('');
}

// Mini cart toggle
document.addEventListener('DOMContentLoaded', function () {
    // Mini Cart
    const cartBtn = document.getElementById('miniCartBtn');
    const cartDD  = document.getElementById('miniCartDropdown');
    if (cartBtn && cartDD) {
        cartBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            cartDD.classList.toggle('open');
            wishDD && wishDD.classList.remove('open');
        });
    }

    // Mini Wishlist
    const wishBtn = document.getElementById('miniWishBtn');
    const wishDD  = document.getElementById('miniWishDropdown');
    if (wishBtn && wishDD) {
        wishBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            wishDD.classList.toggle('open');
            cartDD && cartDD.classList.remove('open');
        });
    }

    document.addEventListener('click', function (e) {
        if (!e.target.closest('#miniCartWrap')) cartDD && cartDD.classList.remove('open');
        if (!e.target.closest('#miniWishWrap')) wishDD && wishDD.classList.remove('open');
    });

    renderMiniCart();
    renderMiniWish();
});

// =============================================
// 2. BACK TO TOP BUTTON
// =============================================
window.addEventListener('scroll', () => {
    const btn = document.getElementById('backToTop');
    if (btn) btn.classList.toggle('visible', window.scrollY > 400);
});

// =============================================
// 3. WISHLIST TOGGLE
// =============================================
const WISH_KEY = 'luxora_wishlist';

function getWishlist() {
    return JSON.parse(localStorage.getItem(WISH_KEY) || '[]');
}

function saveWishlist(list) {
    localStorage.setItem(WISH_KEY, JSON.stringify(list));
    renderMiniWish();
}

function toggleWishlistItem(id, name, img, price) {
    const list = getWishlist();
    const idx = list.findIndex(i => i.id === id);
    if (idx > -1) {
        list.splice(idx, 1);
    } else {
        list.push({ id, name, img, price });
    }
    saveWishlist(list);
    return idx === -1; // true = added, false = removed
}

function removeWishItem(id) {
    saveWishlist(getWishlist().filter(i => i.id !== id));
    // update heart icon on page if visible
    const btn = document.querySelector(`.wish-btn[data-id="${id}"]`);
    if (btn) btn.classList.remove('wished');
}

function renderMiniWish() {
    const list = getWishlist();
    const mwItems = document.getElementById('mwItems');
    const mwCount = document.getElementById('mwCount');
    const navCount = document.getElementById('navWishCount');
    if (!mwItems) return;

    const total = list.length;
    if (navCount) navCount.textContent = total;
    if (mwCount) mwCount.textContent = total;

    if (list.length === 0) {
        mwItems.innerHTML = '<div class="mc-empty"><i class="fas fa-heart"></i>No items saved</div>';
        return;
    }

    mwItems.innerHTML = list.map(item => `
        <div class="mc-item" id="mw-${item.id}">
            <img src="${item.img}" alt="${item.name}" />
            <div class="mc-item-info">
                <h5>${item.name}</h5>
                <span class="mc-item-price">₹${item.price.toLocaleString('en-IN')}</span>
            </div>
            <button class="mc-remove" onclick="removeWishItem('${item.id}')" title="Remove"><i class="fas fa-times"></i></button>
        </div>
    `).join('');
}

// Heart buttons on product cards
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.product-actions button:first-child').forEach(btn => {
        const card = btn.closest('.product-card');
        if (!card) return;
        const name  = card.querySelector('h4') ? card.querySelector('h4').textContent.trim() : 'Product';
        const img   = card.querySelector('img') ? card.querySelector('img').src : '';
        const price = parseInt(card.dataset.price || (card.querySelector('.price') ? card.querySelector('.price').textContent.replace(/[^0-9]/g,'') : 0));
        const id    = name.toLowerCase().replace(/\s+/g,'-');

        btn.dataset.id = id;
        btn.classList.add('wish-btn');

        // mark red if already wishlisted
        if (getWishlist().find(i => i.id === id)) {
            btn.classList.add('wished');
            const icon = btn.querySelector('i');
            if (icon) icon.style.color = '#e74c3c';
        }

        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            const added = toggleWishlistItem(id, name, img, price);
            this.classList.toggle('wished', added);
            const icon = this.querySelector('i');
            if (icon) icon.style.color = added ? '#e74c3c' : '';
        });
    });
});

// =============================================
// 4. NEWSLETTER FORM
// =============================================
const newsletterForm = document.querySelector('.newsletter-form');
if (newsletterForm) {
    newsletterForm.addEventListener('submit', function () {
        const input = this.querySelector('input');
        const btn = this.querySelector('button');
        if (input && input.value) {
            btn.textContent = '✓ Subscribed!';
            btn.style.background = '#27ae60';
            input.value = '';
            setTimeout(() => {
                btn.textContent = 'Subscribe';
                btn.style.background = '';
            }, 2500);
        }
    });
}

// =============================================
// 5. DESKTOP DROPDOWN TOGGLE (Click to pin)
//    — Works on ALL pages (index, category, etc.)
// =============================================
document.querySelectorAll('.has-dropdown').forEach(item => {
    const link = item.querySelector(':scope > a');

    if (link) {
        link.addEventListener('click', function (e) {
            const dropdown = item.querySelector('.dropdown');
            if (!dropdown) return;

            // Agar already pinned hai toh unpin karo aur navigate karo
            if (item.classList.contains('pinned')) {
                item.classList.remove('pinned');
                return; // normal navigation allow karo
            }

            // Nahi toh pin karo aur navigation rokko
            e.preventDefault();

            // Pehle baaki sab pinned dropdowns band karo
            document.querySelectorAll('.has-dropdown.pinned').forEach(other => {
                if (other !== item) other.classList.remove('pinned');
            });

            item.classList.add('pinned');
        });
    }
});

// Bahar click karo toh sab dropdowns band ho jayein
document.addEventListener('click', function (e) {
    if (!e.target.closest('.has-dropdown')) {
        document.querySelectorAll('.has-dropdown.pinned').forEach(item => {
            item.classList.remove('pinned');
        });
    }
});

// Escape key se bhi band ho
document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
        document.querySelectorAll('.has-dropdown.pinned').forEach(item => {
            item.classList.remove('pinned');
        });
    }
});

// =============================================
// 6. MOBILE MENU — Hamburger + Drawer + Overlay
// =============================================
(function () {
    const hamburger = document.getElementById('mobileHamburger');
    const mobileDrawer = document.getElementById('mobileMenuDrawer');
    const overlay = document.getElementById('menuOverlay');
    const closeBtn = document.getElementById('closeMobileMenu');
    const body = document.body;

    function openMobileMenu() {
        if (mobileDrawer) mobileDrawer.classList.add('active');
        if (overlay) overlay.classList.add('active');
        body.classList.add('menu-open');
    }

    function closeMobileMenu() {
        if (mobileDrawer) mobileDrawer.classList.remove('active');
        if (overlay) overlay.classList.remove('active');
        body.classList.remove('menu-open');
    }

    if (hamburger) {
        hamburger.addEventListener('click', (e) => {
            e.stopPropagation();
            openMobileMenu();
        });
    }

    if (closeBtn) {
        closeBtn.addEventListener('click', closeMobileMenu);
    }

    if (overlay) {
        overlay.addEventListener('click', closeMobileMenu);
    }

    if (mobileDrawer) {
        mobileDrawer.addEventListener('click', (e) => e.stopPropagation());
    }

    // ---- MOBILE ACCORDION DROPDOWNS ----
    const toggleButtons = document.querySelectorAll('.mobile-dropdown-toggle');
    const allMobileDropdowns = document.querySelectorAll('.dropdown-mobile');

    // Sab mobile dropdowns initially band rakho
    allMobileDropdowns.forEach(dd => {
        dd.style.display = 'none';
    });

    toggleButtons.forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            const targetId = this.getAttribute('data-target');
            if (!targetId) return;

            const targetDropdown = document.getElementById(targetId);
            if (!targetDropdown) return;

            const isOpen = targetDropdown.style.display === 'block';

            // Sab band karo
            allMobileDropdowns.forEach(drop => {
                drop.style.display = 'none';
                const otherBtn = document.querySelector(`.mobile-dropdown-toggle[data-target="${drop.id}"]`);
                if (otherBtn) otherBtn.classList.remove('open');
            });

            // Agar pehle band tha toh kholdo
            if (!isOpen) {
                targetDropdown.style.display = 'block';
                this.classList.add('open');
            }
        });
    });

    // Mobile links click pe drawer band karo
    const allMobileLinks = document.querySelectorAll('.mobile-nav-menu a');
    allMobileLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            if (!e.target.closest('.mobile-dropdown-toggle')) {
                setTimeout(closeMobileMenu, 100);
            }
        });
    });

    // Window resize pe mobile menu band karo
    window.addEventListener('resize', function () {
        if (window.innerWidth > 992) {
            closeMobileMenu();
            allMobileDropdowns.forEach(dd => {
                dd.style.display = 'none';
            });
            toggleButtons.forEach(btn => btn.classList.remove('open'));
        }
    });

    console.log('LUXORA scripts loaded — all pages ready ✓');
})();