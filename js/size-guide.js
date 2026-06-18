// SIZE GUIDE INTERACTIVE TABS & CALCULATOR
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Tab Switching
    const tabButtons = document.querySelectorAll('.size-tab-btn');
    const tableContainers = document.querySelectorAll('.size-table-container');

    tabButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            tabButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');

            tableContainers.forEach(container => {
                if (container.id === `${targetTab}-table-container`) {
                    container.classList.add('active');
                } else {
                    container.classList.remove('active');
                }
            });
        });
    });

    // 2. Bra Size Calculator
    const calcForm = document.getElementById('braSizeCalcForm');
    const resultBox = document.getElementById('calcResultBox');
    const resultText = document.getElementById('calcResultText');
    const resultAdvice = document.getElementById('calcResultAdvice');

    if (calcForm) {
        calcForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const underbust = parseFloat(document.getElementById('underbustVal').value);
            const overbust = parseFloat(document.getElementById('overbustVal').value);

            if (isNaN(underbust) || isNaN(overbust) || underbust <= 0 || overbust <= 0) {
                alert('Please enter valid positive measurements.');
                return;
            }

            if (overbust <= underbust) {
                alert('Overbust measurement must be larger than underbust measurement.');
                return;
            }

            // Standard Bra sizing math
            // Band Size: Underbust (even) + 4, Underbust (odd) + 5
            let band = Math.round(underbust);
            if (band % 2 === 0) {
                band += 4;
            } else {
                band += 5;
            }

            // Cup Size: Difference between Overbust and calculated Band
            const diff = Math.round(overbust - band);
            const cups = ['AA', 'A', 'B', 'C', 'D', 'DD/E', 'DDD/F', 'G', 'H'];
            let cup = 'A';

            if (diff <= 0) {
                cup = 'AA';
            } else if (diff < cups.length) {
                cup = cups[diff];
            } else {
                cup = 'H';
            }

            // Display results
            if (resultText) resultText.textContent = `${band}${cup}`;
            if (resultAdvice) {
                resultAdvice.textContent = `Based on your measurements, your estimated size is ${band}${cup}. Keep in mind that different brands and silhouettes may fit slightly differently.`;
            }
            if (resultBox) resultBox.classList.add('active');
        });
    }
});
