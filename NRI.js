// Intersection Observer to trigger animation
document.addEventListener("DOMContentLoaded", function () {
    const contactForm = document.querySelector(".contact-form");
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    contactForm.classList.add("in-view");
                    observer.unobserve(contactForm); // Stop observing once animation is triggered
                }
            });
        },
        { threshold: 0.1 } // Trigger when 10% of the element is visible
    );

    observer.observe(contactForm);
});
