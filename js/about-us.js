// ABOUT US INTERACTIVE TIMELINE
document.addEventListener('DOMContentLoaded', function() {
    const yearButtons = document.querySelectorAll('.timeline-year-btn');
    const contentCards = document.querySelectorAll('.timeline-content-card');

    yearButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const targetYear = this.getAttribute('data-year');
            
            // Remove active from all buttons
            yearButtons.forEach(b => b.classList.remove('active'));
            // Add active to current button
            this.classList.add('active');

            // Fade out and deactivate current active content card
            contentCards.forEach(card => {
                if (card.classList.contains('active')) {
                    card.classList.remove('active');
                }
            });

            // Activate target card
            const targetCard = document.getElementById(`timeline-${targetYear}`);
            if (targetCard) {
                targetCard.classList.add('active');
            }
        });
    });
});
