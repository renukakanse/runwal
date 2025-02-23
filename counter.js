document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  counters.forEach(counter => {
    const target = +counter.getAttribute("data-target"); // Get the target number
    const duration = 2000; // Animation duration in ms
    const increment = target / (duration / 20); // Increment per 20ms

    const updateCounter = () => {
      const current = +counter.innerText; // Current value
      if (current < target) {
        counter.innerText = Math.ceil(current + increment); // Increment
        setTimeout(updateCounter, 20); // Call updateCounter every 20ms
      } else {
        counter.innerText = target; // Ensure the final number is accurate
        // Append "K" for the Happy Families counter
        if (target >= 1000) {
          counter.innerText = `${target / 1000}K`; // Format large numbers with K
        }
      }
    };

    updateCounter();
  });
});
