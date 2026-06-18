// SCROLL SPY FOR PRIVACY POLICY & TERMS
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('.policy-content-section');
    const tocLinks = document.querySelectorAll('.policy-toc-link');

    // Scroll spy using Intersection Observer
    const observerOptions = {
        root: null,
        rootMargin: '-20% 0px -60% 0px', // Trigger when section is in the middle of viewport
        threshold: 0
    };

    const observerCallback = (entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const targetId = entry.target.getAttribute('id');
                
                // Update TOC link active state
                tocLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href === `#${targetId}`) {
                        link.classList.add('active');
                        // Scroll TOC inside sidebar if needed
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
        });
    };

    const observer = new IntersectionObserver(observerCallback, observerOptions);
    sections.forEach(section => observer.observe(section));

    // Smooth scroll for TOC clicks
    tocLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 40, // padding offset
                    behavior: 'smooth'
                });
            }
        });
    });
});
