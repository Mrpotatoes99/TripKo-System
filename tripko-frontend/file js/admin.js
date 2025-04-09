// Add click handlers for navigation items
document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        // Remove active class from all items
        document.querySelectorAll('.nav-item').forEach(navItem => {
            navItem.classList.remove('active');
        });
        // Add active class to clicked item
        item.classList.add('active');
    });
});

// Add click handler for logout button
document.querySelector('.logout-btn').addEventListener('click', () => {
    // Handle logout logic here
    console.log('Logging out...');
});

// Add click handlers for settings cards
document.querySelectorAll('.card button').forEach(button => {
    button.addEventListener('click', () => {
        // Handle settings card click
        console.log('Opening:', button.textContent);
    });
});