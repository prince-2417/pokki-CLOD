// RETURNS WORKFLOW HANDLER
document.addEventListener('DOMContentLoaded', function() {
    
    const returnsForm = document.getElementById('returnsWorkflowForm');
    const nextBtn = document.getElementById('returnsNextBtn');
    const submitBtn = document.getElementById('returnsSubmitBtn');
    
    const step1 = document.getElementById('returnsStep1');
    const step2 = document.getElementById('returnsStep2');
    const step3 = document.getElementById('returnsStep3');
    
    const orderIdInput = document.getElementById('retOrderId');
    const emailInput = document.getElementById('retEmail');
    const itemGrid = document.getElementById('returnsItemsList');
    const displayOrderId = document.getElementById('successOrderId');
    const displayBarcode = document.getElementById('successBarcode');

    // Mock Items DB by Order ID suffix (simulating order data lookups)
    const mockOrderItems = [
        { id: 1, name: 'Silk Lace Robe', size: 'M', color: 'Black', price: 2999, img: 'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=200&q=80' },
        { id: 2, name: 'Floral Wrap Dress', size: 'S', color: 'Floral Blue', price: 1299, img: 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?w=200&q=80' },
        { id: 3, name: 'Padded Comfort Bra', size: '34B', color: 'Nude', price: 999, img: 'https://images.unsplash.com/photo-1606760227091-3dd870d97f1d?w=200&q=80' }
    ];

    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            // Validate step 1 inputs
            if (!orderIdInput.value.trim() || !emailInput.value.trim()) {
                alert('Please fill in both Order ID and Email Address.');
                return;
            }

            // Simulate loading order items
            renderOrderItems();

            // Transition to Step 2
            step1.classList.remove('active');
            step2.classList.add('active');
        });
    }

    if (submitBtn) {
        submitBtn.addEventListener('click', function(e) {
            e.preventDefault();

            // Validate item selection in step 2
            const checkedBoxes = step2.querySelectorAll('input[type="checkbox"]:checked');
            if (checkedBoxes.length === 0) {
                alert('Please select at least one item to return.');
                return;
            }

            // Populate Success Info
            const orderId = orderIdInput.value.toUpperCase().trim();
            if (displayOrderId) displayOrderId.textContent = orderId;
            if (displayBarcode) {
                // Generate simulated numerical barcode string
                const cleanIdNum = orderId.replace(/[^0-9]/g, '');
                displayBarcode.textContent = `|||${cleanIdNum || '930128'}8391204|||`;
            }

            // Transition to Step 3
            step2.classList.remove('active');
            step3.classList.add('active');
        });
    }

    function renderOrderItems() {
        if (!itemGrid) return;
        
        // Always return the mock items for interactive demonstration
        itemGrid.innerHTML = mockOrderItems.map(item => `
            <div class="returns-item-row">
                <input type="checkbox" id="item-${item.id}" value="${item.id}" />
                <img src="${item.img}" alt="${item.name}" />
                <div class="returns-item-details">
                    <h5>${item.name}</h5>
                    <p>Size: ${item.size} | Color: ${item.color}</p>
                </div>
                <div class="returns-item-price">₹${item.price.toLocaleString('en-IN')}</div>
            </div>
        `).join('');
    }
});
