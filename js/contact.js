// CONTACT FORM HANDLER
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('luxuryContactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get inputs
            const nameInput = this.querySelector('input[type="text"]');
            const emailInput = this.querySelector('input[type="email"]');
            const subjectInput = this.querySelector('input[name="subject"]');
            const messageInput = this.querySelector('textarea');
            
            // Basic validation
            if (!nameInput.value || !emailInput.value || !messageInput.value) {
                return;
            }
            
            // Show toast notification
            const toast = document.getElementById('contactSuccessToast');
            if (toast) {
                toast.classList.add('active');
                
                // Clear form
                contactForm.reset();
                
                // Hide toast after 4 seconds
                setTimeout(() => {
                    toast.classList.remove('active');
                }, 4000);
            }
        });
    }
});
