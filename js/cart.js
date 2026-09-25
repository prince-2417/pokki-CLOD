const COUPON_CODES = { 'LACEHARBOR10': 10, 'SAVE20': 20 };
let appliedDiscount = 0;

// ── LOAD CART FROM localStorage ──
function loadCart() {
    const cart = getCart();
    const container = document.getElementById('cartItemsContainer');
    if (!container) return;

    container.innerHTML = '';

    if (cart.length === 0) {
        checkEmpty();
        return;
    }

    cart.forEach(item => {
        const div = document.createElement('div');
        div.className = 'cart-item';
        div.id = 'item-' + item.id;
        div.innerHTML = `
            <img src="${item.img}" alt="${item.name}" />
            <div class="cart-item-info">
                <p class="cart-brand">LACEHARBOR</p>
                <h4>${item.name}</h4>
                <p class="cart-meta">Color: ${item.color} &nbsp;|&nbsp; Size: ${item.size}</p>
                <div class="cart-item-bottom">
                    <div class="qty-wrap">
                        <button onclick="changeQty('item-${item.id}', -1, '${item.id}')">−</button>
                        <input type="number" value="${item.qty}" min="1" max="10" id="qty-item-${item.id}" onchange="syncQty('${item.id}', this.value)" />
                        <button onclick="changeQty('item-${item.id}', 1, '${item.id}')">+</button>
                    </div>
                    <span class="cart-price" data-price="${item.price}">₹${(item.price * item.qty).toLocaleString('en-IN')}</span>
                    <button class="remove-btn" onclick="removeItem('item-${item.id}', '${item.id}')"><i class="fas fa-trash-can"></i></button>
                </div>
            </div>
        `;
        container.appendChild(div);
    });

    updateTotal();
}

function syncQty(cartId, val) {
    const cart = getCart();
    const item = cart.find(i => i.id === cartId);
    if (item) {
        item.qty = Math.min(10, Math.max(1, parseInt(val) || 1));
        saveCart(cart);
        // update price display
        const priceEl = document.querySelector('#item-' + cartId + ' .cart-price');
        if (priceEl) priceEl.textContent = '₹' + (item.price * item.qty).toLocaleString('en-IN');
        updateTotal();
    }
}

function changeQty(domId, delta, cartId) {
    const input = document.getElementById('qty-' + domId);
    const newVal = Math.min(10, Math.max(1, parseInt(input.value) + delta));
    input.value = newVal;
    syncQty(cartId, newVal);
}

function removeItem(domId, cartId) {
    removeCartItem(cartId); // updates localStorage + mini cart
    const item = document.getElementById(domId);
    if (item) {
        item.style.opacity = '0';
        item.style.transform = 'translateX(-20px)';
        item.style.transition = 'all 0.3s ease';
        setTimeout(() => { item.remove(); updateTotal(); checkEmpty(); }, 300);
    }
}

function checkEmpty() {
    const items = document.querySelectorAll('.cart-item');
    const empty = document.getElementById('cartEmpty');
    const couponRow = document.querySelector('.coupon-row');
    const cartRight = document.querySelector('.cart-right');
    if (items.length === 0) {
        if (empty) empty.style.display = 'block';
        if (couponRow) couponRow.style.display = 'none';
        if (cartRight) cartRight.style.display = 'none';
    }
}

function updateTotal() {
    const items = document.querySelectorAll('.cart-item');
    let subtotal = 0, count = 0;

    items.forEach(item => {
        const price = parseInt(item.querySelector('.cart-price').dataset.price);
        const qty = parseInt(item.querySelector('input[type="number"]').value);
        subtotal += price * qty;
        count += qty;
    });

    const discountAmt = Math.round(subtotal * appliedDiscount / 100);
    const delivery = (subtotal - discountAmt) >= 999 ? 0 : 99;
    const total = subtotal - discountAmt + delivery;

    document.getElementById('subtotalVal').textContent = '₹' + subtotal.toLocaleString('en-IN');
    document.getElementById('discountVal').textContent = '− ₹' + discountAmt.toLocaleString('en-IN');
    document.getElementById('deliveryVal').textContent = delivery === 0 ? 'FREE' : '₹' + delivery;
    document.getElementById('totalVal').textContent = '₹' + total.toLocaleString('en-IN');
    document.getElementById('totalItems').textContent = count;
    document.getElementById('cartItemCount').textContent = items.length + ' Item' + (items.length !== 1 ? 's' : '');

    const savingMsg = document.getElementById('savingMsg');
    if (discountAmt > 0) {
        document.getElementById('savingAmt').textContent = '₹' + discountAmt.toLocaleString('en-IN');
        savingMsg.style.display = 'block';
    } else {
        savingMsg.style.display = 'none';
    }
}

function applyCoupon() {
    const code = document.getElementById('couponInput').value.trim().toUpperCase();
    const msg = document.getElementById('couponMsg');
    if (COUPON_CODES[code]) {
        appliedDiscount = COUPON_CODES[code];
        msg.textContent = '✓ Coupon applied! ' + appliedDiscount + '% discount added.';
        msg.className = 'coupon-msg success';
    } else {
        appliedDiscount = 0;
        msg.textContent = '✗ Invalid coupon code. Try LACEHARBOR10 or SAVE20.';
        msg.className = 'coupon-msg error';
    }
    updateTotal();
}

loadCart();
