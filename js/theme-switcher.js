document.addEventListener('DOMContentLoaded', function () {
    // Get the theme toggle button
    const themeToggle = document.getElementById('theme-toggle');

    // Function to set theme
    function setTheme(isDark) {
        if (isDark) {
            document.documentElement.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }
    }

    // Check for saved theme preference or use system preference
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

    if (savedTheme === 'dark' || (!savedTheme && prefersDark)) {
        setTheme(true);
    } else {
        setTheme(false);
    }

    // Toggle theme when button is clicked
    themeToggle.addEventListener('click', function () {
        const isDark = document.documentElement.classList.contains('dark');
        setTheme(!isDark);
    });
});
