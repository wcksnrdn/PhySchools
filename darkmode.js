
document.addEventListener('DOMContentLoaded', () => {
    let body = document.body;
    let toggleIcon = document.getElementById('toggle-icon');
    let darkModeToggle = document.getElementById('dark-mode-toggle');

    // Load dark mode preference from local storage
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark-mode');
        body.classList.remove('light-mode');
        toggleIcon.classList.remove('fa-moon');
        toggleIcon.classList.add('fa-sun');
    } else {
        body.classList.add('light-mode');
        body.classList.remove('dark-mode');
        toggleIcon.classList.remove('fa-sun');
        toggleIcon.classList.add('fa-moon');
    }

    // Toggle dark mode on button click
    darkModeToggle.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        body.classList.toggle('light-mode');

        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('darkMode', 'enabled');
            toggleIcon.classList.remove('fa-moon');
            toggleIcon.classList.add('fa-sun');
        } else {
            localStorage.setItem('darkMode', 'disabled');
            toggleIcon.classList.remove('fa-sun');
            toggleIcon.classList.add('fa-moon');
        }
    });
});