// TRACK ORDER SIMULATOR
document.addEventListener('DOMContentLoaded', function() {
    
    const trackForm = document.getElementById('luxuryTrackForm');
    const resultsBox = document.getElementById('trackResultsBox');
    
    // Output Elements
    const outOrderId = document.getElementById('outOrderId');
    const outStatus = document.getElementById('outStatus');
    const outCarrier = document.getElementById('outCarrier');
    const outEstDate = document.getElementById('outEstDate');
    const progressBar = document.getElementById('timelineProgressBar');
    const timelineSteps = document.querySelectorAll('.timeline-step');
    const itemsContainer = document.getElementById('trackItemsList');

    // Mock Items List
    const mockOrderItems = [
        { name: 'Floral Wrap Dress', qty: 1, price: 1299 },
        { name: 'Padded Comfort Bra', qty: 2, price: 1998 }
    ];

    if (trackForm) {
        trackForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const orderIdVal = document.getElementById('trackOrderId').value.trim();
            const emailVal = document.getElementById('trackEmail').value.trim();
            
            if (!orderIdVal || !emailVal) {
                return;
            }

            // Simulate tracking lookup
            displayTracking(orderIdVal);
        });
    }

    function displayTracking(orderId) {
        // Upper case order ID
        const cleanId = orderId.toUpperCase();
        if (outOrderId) outOrderId.textContent = cleanId;

        // Determine Status based on Order ID last character
        // Even numbers -> Delivered
        // Odd numbers -> Shipped
        // Letters/Special -> Processing/In Transit
        const lastChar = cleanId.slice(-1);
        const lastDigit = parseInt(lastChar);
        
        let status = 'Processing';
        let progress = 33; // 33% (Processing)
        let carrier = 'Delhivery Express';
        let estDate = '';

        const today = new Date();
        const option = { month: 'short', day: 'numeric', year: 'numeric' };

        if (!isNaN(lastDigit)) {
            if (lastDigit % 2 === 0) {
                status = 'Delivered';
                progress = 100;
                carrier = 'Blue Dart Express';
                // Delivered yesterday
                const delDate = new Date(today);
                delDate.setDate(today.getDate() - 1);
                estDate = delDate.toLocaleDateString('en-US', option) + ' (Completed)';
            } else {
                status = 'Shipped';
                progress = 66;
                carrier = 'Expressbees';
                // Delivered tomorrow
                const shipDate = new Date(today);
                shipDate.setDate(today.getDate() + 1);
                estDate = shipDate.toLocaleDateString('en-US', option);
            }
        } else {
            status = 'Processing';
            progress = 33;
            carrier = 'LUXORA Atelier Courier';
            // Delivered in 3 days
            const procDate = new Date(today);
            procDate.setDate(today.getDate() + 3);
            estDate = procDate.toLocaleDateString('en-US', option);
        }

        // Set Text Outputs
        if (outStatus) outStatus.textContent = status;
        if (outCarrier) outCarrier.textContent = carrier;
        if (outEstDate) outEstDate.textContent = estDate;

        // Update Progress Bar width / height (for mobile)
        const isMobile = window.innerWidth <= 768;
        if (progressBar) {
            if (isMobile) {
                progressBar.style.width = '3px';
                progressBar.style.height = `${progress}%`;
            } else {
                progressBar.style.height = '3px';
                progressBar.style.width = `${progress}%`;
            }
        }

        // Reset Timeline classes
        timelineSteps.forEach(step => {
            step.classList.remove('active', 'current');
        });

        // Activate Steps based on progress
        if (progress >= 33) {
            timelineSteps[0].classList.add('active'); // Placed
            timelineSteps[1].classList.add('current'); // Processing
        }
        if (progress >= 66) {
            timelineSteps[1].classList.remove('current');
            timelineSteps[1].classList.add('active'); // Processing active
            timelineSteps[2].classList.add('current'); // Shipped current
        }
        if (progress >= 100) {
            timelineSteps[2].classList.remove('current');
            timelineSteps[2].classList.add('active'); // Shipped active
            timelineSteps[3].classList.add('active'); // Delivered active
        }

        // Render mock items list
        if (itemsContainer) {
            itemsContainer.innerHTML = mockOrderItems.map(item => `
                <div class="track-item-row">
                    <div>
                        <strong style="color:var(--black);font-size:0.95rem;">${item.name}</strong>
                        <p style="margin:4px 0 0 0;color:var(--gray);font-size:0.85rem;">Qty: ${item.qty}</p>
                    </div>
                    <span style="font-weight:600;font-size:0.95rem;color:var(--black);">₹${(item.price).toLocaleString('en-IN')}</span>
                </div>
            `).join('');
        }

        // Reveal results container
        if (resultsBox) resultsBox.classList.add('active');
    }
});
