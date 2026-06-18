// FAQ INTERACTIVE ACCORDIONS & SEARCH FILTER
document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Accordion Toggles
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const item = this.parentElement;
            const answer = item.querySelector('.faq-answer');
            const isActive = item.classList.contains('active');
            
            // Close all other active items
            document.querySelectorAll('.faq-item.active').forEach(activeItem => {
                if (activeItem !== item) {
                    activeItem.classList.remove('active');
                    activeItem.querySelector('.faq-answer').style.maxHeight = '0';
                }
            });
            
            if (isActive) {
                item.classList.remove('active');
                answer.style.maxHeight = '0';
            } else {
                item.classList.add('active');
                answer.style.maxHeight = answer.scrollHeight + 'px';
            }
        });
    });

    // 2. Client-side Search Filter
    const searchInput = document.getElementById('faqSearchInput');
    const faqItems = document.querySelectorAll('.faq-item');
    const categories = document.querySelectorAll('.faq-category');
    const emptyState = document.getElementById('faqEmptyState');

    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const query = this.value.toLowerCase().trim();
            let totalVisible = 0;

            categories.forEach(category => {
                let categoryVisibleCount = 0;
                const itemsInCat = category.querySelectorAll('.faq-item');

                itemsInCat.forEach(item => {
                    const qText = item.querySelector('.faq-question h4').textContent.toLowerCase();
                    const aText = item.querySelector('.faq-answer-inner').textContent.toLowerCase();

                    if (qText.includes(query) || aText.includes(query)) {
                        item.style.display = 'block';
                        categoryVisibleCount++;
                        totalVisible++;
                    } else {
                        item.style.display = 'none';
                        // Close if it was open
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').style.maxHeight = '0';
                    }
                });

                // Hide category container if no items inside are visible
                if (categoryVisibleCount > 0) {
                    category.style.display = 'block';
                } else {
                    category.style.display = 'none';
                }
            });

            // Show empty state if nothing matches
            if (totalVisible === 0 && query !== '') {
                if (emptyState) emptyState.style.display = 'block';
            } else {
                if (emptyState) emptyState.style.display = 'none';
            }
        });
    }
});
